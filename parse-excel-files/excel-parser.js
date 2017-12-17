let Je = require('jsonify-excel').JsonifyExcel
let xlsx = require('xlsx')
let _ = require('lodash')

let commonHeader = { no: '',
    title: 'اسم الكتاب',
    author: 'اسم المؤلف',
    author_nationality: 'جنسية المؤلف',
    category: 'موضوع الكتاب',
    isbn: 'ISBN',
    clearance: 'الفسح السعودي',
    size: 'مقاس الكتاب',
    pages: 'عدد الصفحات',
    publish_year: 'تاريخ الإصدار',
    price: 'السعر بالريال السعودي' }

let hasExactHeader = (jsonList,fileName) => {
    let exactHeaderFound = false
    let commonHeaderCopy = Object.assign(commonHeader, {no: fileName})

    jsonList.forEach(json => {
        if(Object.values(json).join()  === Object.values(commonHeaderCopy).join()) {
            exactHeaderFound = true
        }
    })

    return exactHeaderFound
}

let hasCorrectDates = (jsonList,fileName) => {
    let correctDates = true

    jsonList.forEach(json => {
        let publishYear = json.publish_year

        if(publishYear == null)
            publishYear = ''

        publishYear = publishYear.toString()

         if(publishYear != '' && publishYear.length != 4) {
            correctDates = false
            console.log(json, ' has a broken date!')
        }
    })

    return correctDates
}


module.exports = {
    parse(path, fileName) {
        let res = [];
        let exactHeaderFound = false
        let correctDates = true
        let structure = {

                no: '*A',
                title: '*B',
                author: '*C',
                author_nationality: '*D',
                category: '*E',
                isbn: '*F',
                clearance: '*G',
                size: '*H',
                pages: '*I',
                publish_year: '*J',
                price: '*K',
            }

        try {
            let jsonifyExcel = new Je(path)
            console.log(`reading: ${fileName}`)
//            exactHeaderFound = hasExactHeader(jsonifyExcel.toJson({ startRowNum: 1 }, structure).slice(0,2), fileName)
            res = jsonifyExcel.toJson({ startRowNum: 2 }, structure)
            console.log('here')
            correctDates = hasCorrectDates(res, fileName)
        } catch(err) {
            console.warn(`Error reading ${fileName}, skip..`)
        }
        return {array: res, json: JSON.stringify(res,null,2), exactHeaderFound, correctDates}
    }
}

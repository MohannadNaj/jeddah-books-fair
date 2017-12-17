let path = require('path')
let fs = require('fs')
let _ = require('lodash')
let writeFile = require(`${__dirname}/write-file.js`).write

let normalizedPath = path.resolve(`${__dirname}/../books-lists-json`);

let allBooks = []

require("fs").readdirSync(normalizedPath).forEach((file) => {
    let fileContent = require(`${normalizedPath}/${file}`)

    if(_.isArray(fileContent)) {
        allBooks = allBooks.concat ( fileContent )
    }
})
let generatedFile = `${normalizedPath}/../resources/assets/js/books-data.json`


console.log(`total books count: ${allBooks.length}`)
console.log(`Filtering duplicated...`)

allBooks = _.uniqBy(allBooks, (book) => {
    let comparableProperties = ['title', 'price', 'publish_year', 'pages']
    let joinedString = ''
    comparableProperties.forEach(prop => {
        if(book[prop] == null)
            book[prop] = ""
        joinedString = joinedString + book[prop].toString()
    })
    return joinedString
})

console.log(`total books count after filtering: ${allBooks.length}`)

writeFile(generatedFile, JSON.stringify(allBooks,null,2))

console.log(`File generated at: [${generatedFile}].`)

let path = require('path')
let fs = require('fs')
const rl = require('readline-sync');

let parseExcel = require(`${__dirname}/excel-parser.js`).parse
let writeFile = require(`${__dirname}/write-file.js`).write
let source = path.resolve(`${__dirname}/../books-lists`)
let dist = path.resolve(`${__dirname}/../books-lists-json`)

let oldWarnConsole = console.warn
let oldInfoConsole = console.info

console.warn = (...args) => oldWarnConsole("\x1b[31m", ...args, "\x1b[0m")
console.info = (...args) => oldInfoConsole("\x1b[34m", ...args, "\x1b[0m")

let truthy = (answer) => {
    _firstCharacter = answer.substr(0,1).toLowerCase()
    return ! (_firstCharacter == '0' || _firstCharacter == 'n')
}

fs.readdir( source, function( err, files ) {

    files.sort()

    files.forEach(( file )=> {
        if(! file.endsWith('.xlsx') || file.startsWith('done_'))
            return 

        let sourceFile = source + '/' + file
        let distFile = dist + '/' + file + '.json'

        let parsedFile = parseExcel(sourceFile, file.slice(0,-5))

        console.warn(`-------------------`)

        console.log(parsedFile.array.slice(0,3))
        if(parsedFile.exactHeaderFound)
            console.info('Exact Header Found, Go!')
        if(parsedFile.correctDates)
            console.info('Correct Dates, Go!')

        let answer = '0'

        if( parsedFile.exactHeaderFound && parsedFile.correctDates)
        {
            answer = 'y'
        } else {
            answer = rl.question('sounds good? ');
        }

        if(truthy(answer)) {
            writeFile(distFile, parsedFile.json)
            console.log(`file [${sourceFile}] converted to json in [${distFile}]`)
        }
        fs.renameSync(sourceFile, `${source}/done_${truthy(answer) ? 't_': ''}${file}`)
    })
})


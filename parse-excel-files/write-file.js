let fs = require('fs')

module.exports = {
    write(name, content) {
        fs.writeFileSync(name, content)
    }
}
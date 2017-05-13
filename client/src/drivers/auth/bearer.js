module.exports = {
    
    request: function (req, token) {
        console.log(11111);
        console.log(req);
        this.options.http._setHeaders.call(this, req, {Authorization: 'Bearer ' + token});
    },
    
    response: function (res) {
        console.log(2222);
        console.log(res);
        var headers = this.options.http._getHeaders.call(this, res),
            token = headers.Authorization || headers.authorization;

        if (token) {
            token = token.split(/Bearer\:?\s?/i);
            
            return token[token.length > 1 ? 1 : 0].trim();
        }
    }
};
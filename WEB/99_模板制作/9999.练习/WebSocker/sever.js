/**
 * Created by dllo on 16/12/1.
 */
var ws = require("nodejs-websocket");

console.log("开始连接...");

var sever = ws.createServer(function (connect) {
    connect.on("text",function (str) {
        console.log("传过来的文字是:"+str);
        connect.sendText("成功内容是:"+str);
    });
    connect.on("close",function (code,res) {
        console.log("连接关闭:",code,res);
    });
    connect.on("error",function (code,res) {
        console.log("连接异常:",code,res);
    })
}).listen(8080);
console.log("连接成功");
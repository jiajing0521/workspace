/**
 * Created by dingjz on 2016/12/13.
 */

define("test", function (require, exports, module) {
    module.exports = {
        name: "李威"
    }
});
//分开写
/*seajs.use('test', function (test) {
    console.log(test.name);
});
seajs.use('./js/myModule', function (mo) {
    console.log(mo.name);
});*/

//统一
seajs.use(["test", "./js/myModule", "./js/baseModule"], function (test, mo, base) {
    console.log(test.name+mo.name);
    console.log(base.sex);
})
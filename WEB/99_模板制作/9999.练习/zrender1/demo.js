/**
 * Created by dllo on 16/12/2.
 */
var zrender = require("");
var zr = zrender.init(document.getElementById('main'));
zr.clear();
var color = require('src/tool/color');
var colorIdx = 0;
var width = Math.ceil(zr.getWidth());
var height = Math.ceil(zr.getHeight());

// 圆形
zr.addShape({
    shape : 'circle',
    id : zr.newShapeId('circle'),
    style : {
        x : 100,
        y : 100,
        r : 50,
        brushType : 'both',
        color : 'rgba(220, 20, 60, 0.8)',          // rgba supported
        strokeColor : color.getColor(colorIdx++),  // getColor from default palette
        lineWidth : 5,
        text :'circle',
        textPosition :'inside'
    },
    hoverable : true,   // default true
    draggable : true,   // default false
    clickable : true,   // default false

    // 可自带任何有效自定义属性
    _name : 'Hello~',
    onclick: function(params){
        alert(params.target._name);
    },

    // 响应事件并动态修改图形元素
    onmousewheel: function(params){
        var eventTool = require('zrender/tool/event');
        var delta = eventTool.getDelta(params.event);
        var r = params.target.style.r;
        r += (delta > 0 ? 1 : -1) * 10;
        if (r < 10) {
            r = 10;
        };
        zr.modShape(params.target.id, {style: {r: r}});
        zr.refresh();
        eventTool.stop(params.event);
    }
});

zr.render();
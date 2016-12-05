/**
 * Created by dllo on 16/12/2.
 */

    require.config({
        packages: [
            {
                name: 'zrender',
                location: 'zrender/src',
                main: 'zrender'
            }
        ]
    });

    require(["zrender", 'zrender/graphic/Text'], function(zrender, ZText){
        // 初始化zrender
        var zr = zrender.init(document.getElementById("main"), {
            renderer: 'svg'
        });

        var text = new ZText({
            // position : [50, 50],
            // rotation: 1,
            // scale: [2, 2],
            style: {
                x: 0,
                y: 0,
                text: '国国国国\n国国国国\n国国国国',
                width: 50,
                height: 50,
                fill: '#c0f',
                textFont: '18px Microsoft Yahei',
                textBaseline: 'top'
            },
            draggable: true
        });
        zr.add(text);
    });


//var zrender = require("");
//var zr = zrender.init(document.getElementById('main'));
//zr.clear();
//var color = require('src/tool/color');
//var colorIdx = 0;
//var width = Math.ceil(zr.getWidth());
//var height = Math.ceil(zr.getHeight());
//
//// 圆形
//zr.addShape({
//  shape : 'circle',
//  id : zr.newShapeId('circle'),
//  style : {
//      x : 100,
//      y : 100,
//      r : 50,
//      brushType : 'both',
//      color : 'rgba(220, 20, 60, 0.8)',          // rgba supported
//      strokeColor : color.getColor(colorIdx++),  // getColor from default palette
//      lineWidth : 5,
//      text :'circle',
//      textPosition :'inside'
//  },
//  hoverable : true,   // default true
//  draggable : true,   // default false
//  clickable : true,   // default false
//
//  // 可自带任何有效自定义属性
//  _name : 'Hello~',
//  onclick: function(params){
//      alert(params.target._name);
//  },
//
//  // 响应事件并动态修改图形元素
//  onmousewheel: function(params){
//      var eventTool = require('zrender/tool/event');
//      var delta = eventTool.getDelta(params.event);
//      var r = params.target.style.r;
//      r += (delta > 0 ? 1 : -1) * 10;
//      if (r < 10) {
//          r = 10;
//      };
//      zr.modShape(params.target.id, {style: {r: r}});
//      zr.refresh();
//      eventTool.stop(params.event);
//  }
//});
//
//zr.render();
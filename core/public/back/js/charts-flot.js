$(document).ready(function(){"use strict";function e(e,o){return"<div style='font-size:11px; text-align:center; padding:2px; color:white;'>"+e+"<br/>"+Math.round(o.percent)+"%</div>"}function o(){for(y.shift();y.length<u;){var e=100*Math.random(),o=[w+=v,e];y.push(o)}}function l(){o(),$.plot($("#flot-line-chart-realtime"),g,m),setTimeout(l,v)}var t=[[1,85],[2,125],[3,175],[4,220],[5,175],[5,175],[7,175],[8,190],[9,195],[10,200]],a={series:{lines:{show:!0,lineWidth:2,fill:!0,fillColor:{colors:[{opacity:.3},{opacity:.3}]}}},shadowSize:0,xaxis:{color:"#f3f3f3"},yaxis:{color:"#f3f3f3"},colors:["#40babd"],grid:{borderWidth:0,hoverable:!0,clickable:!0},legend:{show:!1},tooltip:!0,tooltipOpts:{content:"x: %x, y: %y"}};$.plot($("#flot-line-chart"),[t],a);var i=[[1,85],[2,125],[3,175],[4,220],[5,175],[6,175],[7,175],[8,190],[9,195],[10,200]],r=[[1,65],[2,115],[3,185],[4,230],[5,195],[5,165],[7,155],[8,230],[9,220],[10,210]],s={series:{lines:{show:!0,lineWidth:2}},shadowSize:0,xaxis:{color:"#f3f3f3"},yaxis:{color:"#f3f3f3"},colors:["#40babd","#75c181"],grid:{borderWidth:0,hoverable:!0,clickable:!0},legend:{show:!0},tooltip:!0,tooltipOpts:{content:"x: %x, y: %y"}};$.plot($("#flot-line-chart-alt"),[{label:"data1",data:i},{label:"data2",data:r}],s);var c=[[1,100],[2,200],[3,150],[4,400],[5,650],[6,350],[7,700],[8,600],[9,500],[10,450]],d={series:{bars:{show:!0,barWidth:.7,fill:!0,fillColor:{colors:[{opacity:.8},{opacity:.8}]}}},xaxis:{color:"#f3f3f3"},yaxis:{color:"#f3f3f3"},colors:["#40babd"],grid:{borderWidth:0,hoverable:!0,clickable:!0},legend:{show:!1},tooltip:!0,tooltipOpts:{content:"x: %x, y: %y"}};$.plot($("#flot-bar-chart"),[c],d);var n=[[1,100],[2,200],[3,150],[4,400],[5,250],[6,350],[7,300],[8,400],[9,100],[10,250]],f={series:{bars:{show:!0,align:"center",horizontal:!0,barWidth:.5,lineWidth:15,fill:!0,fillColor:{colors:[{opacity:.8},{opacity:.8}]}}},xaxis:{color:"#f3f3f3"},yaxis:{color:"#f3f3f3"},colors:["#40babd","#75c181"],grid:{borderWidth:0,hoverable:!0,clickable:!0},legend:{show:!1},tooltip:!0,tooltipOpts:{content:"x: %x, y: %y"}};$.plot($("#flot-bar-chart-alt"),[n],f);var b=[{label:"Team A",data:60,color:"#40babd"},{label:"Team B",data:15,color:"#75c181"},{label:"Team C",data:25,color:"#58bbee"}],h={series:{pie:{show:!0,highlight:{opacity:.2},radius:1,label:{show:!0,radius:2/3,formatter:e,threshold:.1}}},grid:{hoverable:!0},legend:{show:!0},tooltip:!0,tooltipOpts:{content:"%s: %p.0%",shifts:{x:20,y:0}}};$.plot($("#flot-pie-chart"),b,h);var p=[{label:"Series 1",data:20,color:"#40babd"},{label:"Series 2",data:15,color:"#75c181"},{label:"Series 3",data:25,color:"#F5D44B"},{label:"Series 4",data:10,color:"#656C79"},{label:"Series 5",data:10,color:"#8A40A7"},{label:"Series 6",data:20,color:"#58bbee"}],x={series:{pie:{show:!0,innerRadius:.5,highlight:{opacity:.2}}},grid:{hoverable:!0},legend:{show:!0},tooltip:!0,tooltipOpts:{content:"%s: %p.0%",shifts:{x:20,y:0}}};$.plot($("#flot-pie-chart-alt"),p,x);var g,y=[],u=50,v=1e3,w=(new Date).getTime(),m={series:{lines:{show:!0,lineWidth:1.2,fill:!0,fillColor:{colors:[{opacity:.3},{opacity:.3}]}}},colors:["#75c181"],xaxis:{color:"#f3f3f3",mode:"time",tickSize:[2,"second"],tickFormatter:function(e,o){var l=new Date(e);if(l.getSeconds()%20==0){var t=l.getHours()<10?"0"+l.getHours():l.getHours(),a=l.getMinutes()<10?"0"+l.getMinutes():l.getMinutes(),i=l.getSeconds()<10?"0"+l.getSeconds():l.getSeconds();return t+":"+a+":"+i}return""},axisLabel:"Time",axisLabelUseCanvas:!0,axisLabelFontSizePixels:12,axisLabelPadding:10},yaxis:{color:"#f3f3f3",min:0,max:100,tickSize:5,tickFormatter:function(e,o){return e%10==0?e+"%":""},axisLabel:"CPU loading",axisLabelUseCanvas:!0,axisLabelFontSizePixels:12,axisLabelPadding:6},grid:{borderWidth:0,hoverable:!0,clickable:!0},legend:{labelBoxBorderColor:"#fff"}};o(),g=[{label:"CPU",data:y}],$.plot($("#flot-line-chart-realtime"),g,m),l();var S=[[1354586e6,153],[1364587e6,658],[1374588e6,198],[1384589e6,663],[139459e7,801],[1404591e6,1080],[1414592e6,353],[1424593e6,749],[1434594e6,523],[1444595e6,258],[1454596e6,688],[1464597e6,364]],W=[[1354586e6,53],[1364587e6,65],[1374588e6,98],[1384589e6,83],[139459e7,980],[1404591e6,808],[1414592e6,720],[1424593e6,674],[1434594e6,23],[1444595e6,79],[1454596e6,88],[1464597e6,36]],C=[{label:"data1",data:S,bars:{show:!0,barWidth:864e7,fill:!0,fillColor:{colors:[{opacity:.6},{opacity:.6}]}}},{label:"data2",data:W,lines:{show:!0},points:{show:!0}}],k={xaxis:{mode:"time",color:"#f3f3f3"},yaxis:{color:"#f3f3f3"},grid:{borderWidth:0},colors:["#58bbee","#75c181"]};$.plot($("#flot-combined-chart"),C,k)});
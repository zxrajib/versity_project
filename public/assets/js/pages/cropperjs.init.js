window.onload=function(){"use strict";var c,i=window.Cropper,l=window.URL||window.webkitURL,r=document.querySelector(".img-container").getElementsByTagName("img").item(0),s=document.getElementById("download"),e=document.getElementById("actions"),o=document.getElementById("dataX"),a=document.getElementById("dataY"),n=document.getElementById("dataHeight"),d=document.getElementById("dataWidth"),p=document.getElementById("dataRotate"),u=document.getElementById("dataScaleX"),m=document.getElementById("dataScaleY"),g={aspectRatio:16/9,preview:".img-preview",ready:function(e){console.log(e.type)},cropstart:function(e){console.log(e.type,e.detail.action)},cropmove:function(e){console.log(e.type,e.detail.action)},cropend:function(e){console.log(e.type,e.detail.action)},crop:function(e){var t=e.detail;console.log(e.type),o.value=Math.round(t.x),a.value=Math.round(t.y),n.value=Math.round(t.height),d.value=Math.round(t.width),p.value=void 0!==t.rotate?t.rotate:"",u.value=void 0!==t.scaleX?t.scaleX:"",m.value=void 0!==t.scaleY?t.scaleY:""},zoom:function(e){console.log(e.type,e.detail.scale)}},v=new i(r,g),y=r.src,h="image/jpeg",b="cropped.jpg";$('[data-toggle="tooltip"]').tooltip(),document.createElement("canvas").getContext||$('button[data-method="getCroppedCanvas"]').prop("disabled",!0),void 0===document.createElement("cropper").style.transition&&($('button[data-method="rotate"]').prop("disabled",!0),$('button[data-method="scale"]').prop("disabled",!0)),void 0===s.download&&(s.className+=" disabled",s.title="Your browser does not support download"),e.querySelector(".docs-toggles").onchange=function(e){var t,o,a,n,d=e||window.event,c=d.target||d.srcElement;v&&("label"===c.tagName.toLowerCase()&&(c=c.querySelector("input")),a="checkbox"===c.type,n="radio"===c.type,(a||n)&&(a?(g[c.name]=c.checked,t=v.getCropBoxData(),o=v.getCanvasData(),g.ready=function(){console.log("ready"),v.setCropBoxData(t).setCanvasData(o)}):(g[c.name]=c.value,g.ready=function(){console.log("ready")}),v.destroy(),v=new i(r,g)))},e.querySelector(".docs-buttons").onclick=function(e){var t,o,a,n=e||window.event,d=n.target||n.srcElement;if(v){for(;d!==this&&!d.getAttribute("data-method");)d=d.parentNode;if(!(d===this||d.disabled||-1<d.className.indexOf("disabled"))&&(a={method:d.getAttribute("data-method"),target:d.getAttribute("data-target"),option:d.getAttribute("data-option")||void 0,secondOption:d.getAttribute("data-second-option")||void 0},v.cropped,a.method)){if(void 0!==a.target&&(o=document.querySelector(a.target),!d.hasAttribute("data-option")&&a.target&&o))try{a.option=JSON.parse(o.value)}catch(n){console.log(n.message)}switch(a.method){case"getCroppedCanvas":try{a.option=JSON.parse(a.option)}catch(n){console.log(n.message)}"image/jpeg"===h&&(a.option||(a.option={}),a.option.fillColor="#fff")}switch(t=v[a.method](a.option,a.secondOption),a.method){case"scaleX":case"scaleY":d.setAttribute("data-option",-a.option);break;case"getCroppedCanvas":t&&($("#getCroppedCanvasModal").modal().find(".modals-body").html(t),s.disabled||(s.download=b,s.href=t.toDataURL(h)));break;case"destroy":v=null,c&&(l.revokeObjectURL(c),c="",r.src=y)}if("object"==typeof t&&t!==v&&o)try{o.value=JSON.stringify(t)}catch(n){console.log(n.message)}}}},document.body.onkeydown=function(e){var t=e||window.event;if(t.target===this&&v&&!(300<this.scrollTop))switch(t.keyCode){case 37:t.preventDefault(),v.move(-1,0);break;case 38:t.preventDefault(),v.move(0,-1);break;case 39:t.preventDefault(),v.move(1,0);break;case 40:t.preventDefault(),v.move(0,1)}};var f=document.getElementById("inputImage");l?f.onchange=function(){var e,t=this.files;v&&t&&t.length&&(e=t[0],/^image\/\w+/.test(e.type)?(h=e.type,b=e.name,c&&l.revokeObjectURL(c),r.src=c=l.createObjectURL(e),v.destroy(),v=new i(r,g),f.value=null):window.alert("Please choose an image file."))}:(f.disabled=!0,f.parentNode.className+=" disabled")};
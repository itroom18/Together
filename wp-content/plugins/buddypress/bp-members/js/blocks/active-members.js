parcelRequire=function(e,r,t,n){var i,o="function"==typeof parcelRequire&&parcelRequire,u="function"==typeof require&&require;function f(t,n){if(!r[t]){if(!e[t]){var i="function"==typeof parcelRequire&&parcelRequire;if(!n&&i)return i(t,!0);if(o)return o(t,!0);if(u&&"string"==typeof t)return u(t);var c=new Error("Cannot find module '"+t+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[t][1][r]||r},p.cache={};var l=r[t]=new f.Module(t);e[t][0].call(l.exports,p,l,l.exports,this)}return r[t].exports;function p(e){return f(p.resolve(e))}}f.isParcelRequire=!0,f.Module=function(e){this.id=e,this.bundle=f,this.exports={}},f.modules=e,f.cache=r,f.parent=o,f.register=function(r,t){e[r]=[function(e,r){r.exports=t},{}]};for(var c=0;c<t.length;c++)try{f(t[c])}catch(e){i||(i=e)}if(t.length){var l=f(t[t.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=l:"function"==typeof define&&define.amd?define(function(){return l}):n&&(this[n]=l)}if(parcelRequire=f,i)throw i;return f}({"TOWc":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;const{blockEditor:{InspectorControls:e},components:{Disabled:t,PanelBody:l,RangeControl:r,TextControl:s},element:{Fragment:n,createElement:o},i18n:{__:a},serverSideRender:i}=wp,u=u=>{let{attributes:b,setAttributes:d}=u;const{title:m,maxMembers:p}=b;return o(n,null,o(e,null,o(l,{title:a("Settings","buddypress"),initialOpen:!0},o(s,{label:a("Title","buddypress"),value:m,onChange:e=>{d({title:e})}}),o(r,{label:a("Max members to show","buddypress"),value:p,onChange:e=>d({maxMembers:e}),min:1,max:15,required:!0}))),o(t,null,o(i,{block:"bp/active-members",attributes:b})))};var b=u;exports.default=b;
},{}],"y7A5":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;const{blocks:{createBlock:e}}=wp,t={from:[{type:"block",blocks:["core/legacy-widget"],isMatch:e=>{let{idBase:t,instance:r}=e;return!(null==r||!r.raw)&&"bp_core_recently_active_widget"===t},transform:t=>{let{instance:r}=t;return e("bp/active-members",{title:r.raw.title,maxMembers:r.raw.max_members})}}]};var r=t;exports.default=r;
},{}],"dkrW":[function(require,module,exports) {
"use strict";var e=t(require("./active-members/edit")),r=t(require("./active-members/transforms"));function t(e){return e&&e.__esModule?e:{default:e}}const{blocks:{registerBlockType:s},i18n:{__:i}}=wp;s("bp/active-members",{title:i("Recently Active Members","buddypress"),description:i("Profile photos of recently active members.","buddypress"),icon:{background:"#fff",foreground:"#d84800",src:"groups"},category:"buddypress",attributes:{title:{type:"string",default:i("Recently Active Members","buddypress")},maxMembers:{type:"number",default:15}},edit:e.default,transforms:r.default});
},{"./active-members/edit":"TOWc","./active-members/transforms":"y7A5"}]},{},["dkrW"], null)
//# sourceMappingURL=/bp-members/js/blocks/active-members.js.map
(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([[4],{"8b24":function(t,e,n){"use strict";n.r(e);var o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("q-page",{staticClass:"row items-center justify-evenly"},[n("example-component",{attrs:{title:"Example component",active:"",todos:t.todos,meta:t.meta}})],1)},c=[],r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("p",[t._v(t._s(t.title))]),n("ul",t._l(t.todos,(function(e){return n("li",{key:e.id,on:{click:t.increment}},[t._v("\n      "+t._s(e.id)+" - "+t._s(e.content)+"\n    ")])})),0),n("p",[t._v("Count: "+t._s(t.todoCount)+" / "+t._s(t.meta.totalCount))]),n("p",[t._v("Active: "+t._s(t.active?"yes":"no"))]),n("p",[t._v("Clicks on todos: "+t._s(t.clickCount))])])},i=[],u=n("e4fd"),a=function(){return a=Object.assign||function(t){for(var e,n=1,o=arguments.length;n<o;n++)for(var c in e=arguments[n],e)Object.prototype.hasOwnProperty.call(e,c)&&(t[c]=e[c]);return t},a.apply(this,arguments)};function l(){var t=Object(u["ref"])(0);function e(){return t.value+=1,t.value}return{clickCount:t,increment:e}}function s(t){var e=Object(u["computed"])((function(){return t.value.length}));return{todoCount:e}}var p=Object(u["defineComponent"])({name:"CompositionComponent",props:{title:{type:String,required:!0},todos:{type:Array,default:function(){return[]}},meta:{type:Object,required:!0},active:{type:Boolean}},setup:function(t){return a(a({},l()),s(Object(u["toRef"])(t,"todos")))}}),d=p,f=n("2877"),m=Object(f["a"])(d,r,i,!1,null,null,null),v=m.exports,_=Object(u["defineComponent"])({name:"PageIndex",components:{ExampleComponent:v},setup:function(){var t=Object(u["ref"])([{id:1,content:"ct1"},{id:2,content:"ct2"},{id:3,content:"ct3"},{id:4,content:"ct4"},{id:5,content:"ct5"}]),e=Object(u["ref"])({totalCount:1200});return{todos:t,meta:e}}}),b=_,C=n("9989"),j=n("eebe"),O=n.n(j),y=Object(f["a"])(b,o,c,!1,null,null,null);e["default"]=y.exports;O()(y,"components",{QPage:C["a"]})}}]);
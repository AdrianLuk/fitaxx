import{u as i}from"./links.4e9269a4.js";import{d as u}from"./isArrayLikeObject.76f0d098.js";const c=(t,e="div")=>{const n=document.createElement(e);return n.innerHTML=t.trim(),n},p=t=>(typeof t=="string"&&(t=c(t.replace(/[\t|\n]/gm,""))),t.textContent||t.innerText||""),m=t=>(typeof t=="string"&&(t=c(t)),t.querySelectorAll("img")),d=(t,e=200)=>t&&(e<t.length&&(t=t.substring(0,e).trim()+u("&hellip;")),t),y=()=>{var t;return{description:((t=document.head.querySelector('meta[name="description"]'))==null?void 0:t.content)||"",domain:window.location.origin,title:document.title||""}},g=()=>{var e,n,o,r;const t={description:((e=document.head.querySelector('meta[property="og:description"]'))==null?void 0:e.content)||"",image:((n=document.head.querySelector('meta[property="og:image"]'))==null?void 0:n.content)||"",title:((o=document.head.querySelector('meta[property="og:title"]'))==null?void 0:o.content)||"",type:((r=document.head.querySelector('meta[property="og:type"]'))==null?void 0:r.content)||""};if(!t.title&&(t.title=document.title||"",!t.title)){const a=i();t.title=a.aioseo.urls.domain}return t},f=()=>{var t,e,n,o;return{card:((t=document.head.querySelector('meta[name="twitter:card"]'))==null?void 0:t.content)||"",description:((e=document.head.querySelector('meta[name="twitter:description"]'))==null?void 0:e.content)||"",image:((n=document.head.querySelector('meta[name="twitter:image"]'))==null?void 0:n.content)||"",title:((o=document.head.querySelector('meta[name="twitter:title"]'))==null?void 0:o.content)||""}};export{y as a,f as b,p as c,m as d,g,d as t};
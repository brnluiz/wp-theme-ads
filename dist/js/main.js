!function e(t,n,i){function s(o,r){if(!n[o]){if(!t[o]){var c="function"==typeof require&&require;if(!r&&c)return c(o,!0);if(a)return a(o,!0);var u=new Error("Cannot find module '"+o+"'");throw u.code="MODULE_NOT_FOUND",u}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,i)}return n[o].exports}for(var a="function"==typeof require&&require,o=0;o<i.length;o++)s(i[o]);return s}({1:[function(e,t,n){!function(e){wp.customize("blogname",function(t){t.bind(function(t){e(".site-title a").text(t)})}),wp.customize("blogdescription",function(t){t.bind(function(t){e(".site-description").text(t)})}),wp.customize("header_textcolor",function(t){t.bind(function(t){"blank"===t?e(".site-title a, .site-description").css({clip:"rect(1px, 1px, 1px, 1px)",position:"absolute"}):(e(".site-title a, .site-description").css({clip:"auto",position:"relative"}),e(".site-title a, .site-description").css({color:t}))})})}(jQuery)},{}],2:[function(e,t,n){e("./customizer.js"),e("./navigation.js"),e("./skip-link-focus-fix.js")},{"./customizer.js":1,"./navigation.js":3,"./skip-link-focus-fix.js":4}],3:[function(e,t,n){!function(){function e(){for(var e=this;-1===e.className.indexOf("nav-menu");)"li"===e.tagName.toLowerCase()&&(-1!==e.className.indexOf("focus")?e.className=e.className.replace(" focus",""):e.className+=" focus"),e=e.parentElement}var t,n,i,s,a,o;if(t=document.getElementById("site-navigation"),t&&(n=t.getElementsByTagName("button")[0],"undefined"!=typeof n)){if(i=t.getElementsByTagName("ul")[0],"undefined"==typeof i)return void(n.style.display="none");for(i.setAttribute("aria-expanded","false"),-1===i.className.indexOf("nav-menu")&&(i.className+=" nav-menu"),n.onclick=function(){-1!==t.className.indexOf("toggled")?(t.className=t.className.replace(" toggled",""),n.setAttribute("aria-expanded","false"),i.setAttribute("aria-expanded","false")):(t.className+=" toggled",n.setAttribute("aria-expanded","true"),i.setAttribute("aria-expanded","true"))},s=i.getElementsByTagName("a"),a=0,o=s.length;a<o;a++)s[a].addEventListener("focus",e,!0),s[a].addEventListener("blur",e,!0);!function(e){var t,n,i=e.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");if("ontouchstart"in window)for(t=function(e){var t,n=this.parentNode;if(n.classList.contains("focus"))n.classList.remove("focus");else{for(e.preventDefault(),t=0;t<n.parentNode.children.length;++t)n!==n.parentNode.children[t]&&n.parentNode.children[t].classList.remove("focus");n.classList.add("focus")}},n=0;n<i.length;++n)i[n].addEventListener("touchstart",t,!1)}(t)}}()},{}],4:[function(e,t,n){!function(){var e=/(trident|msie)/i.test(navigator.userAgent);e&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var e,t=location.hash.substring(1);/^[A-z0-9_-]+$/.test(t)&&(e=document.getElementById(t),e&&(/^(?:a|select|input|button|textarea)$/i.test(e.tagName)||(e.tabIndex=-1),e.focus()))},!1)}()},{}]},{},[2]);
//# sourceMappingURL=main.js.map
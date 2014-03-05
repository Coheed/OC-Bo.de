/* mediaboxAdvanced v1.4.6, (c) 2007-2010 John Einselen <http://iaian7.com>, MIT-style license */
var Mediabox;
(function () {
    function B() {
        v.setStyles({top: window.getScrollTop(), left: window.getScrollLeft()})
    }

    function j() {
        f = window.getWidth(), l = window.getHeight(), v.setStyles({width: f, height: l})
    }

    function F(t) {
        Browser.firefox && ["object", window.ie ? "select" : "embed"].forEach(function (e) {
            Array.forEach($$(e), function (e) {
                t && (e._mediabox = e.style.visibility), e.style.visibility = t ? "hidden" : e._mediabox
            })
        }), v.style.display = t ? "" : "none";
        var n = t ? "addEvent" : "removeEvent";
        (Browser.Platform.ios || Browser.ie6) && window[n]("scroll", B), window[n]("resize", j), e.keyboard && document[n]("keydown", I)
    }

    function I(t) {
        if (e.keyboardAlpha)switch (t.code) {
            case 27:
            case 88:
            case 67:
                $();
                break;
            case 37:
            case 80:
                q();
                break;
            case 39:
            case 78:
                R()
        } else switch (t.code) {
            case 27:
                $();
                break;
            case 37:
                q();
                break;
            case 39:
                R()
        }
        if (e.keyboardStop)return!1
    }

    function q() {
        return U(r)
    }

    function R() {
        return U(i)
    }

    function U(s) {
        if (s >= 0) {
            g.set("html", ""), n = s, r = (n || !e.loop ? n : t.length) - 1, i = n + 1, i == t.length && (i = e.loop ? 0 : -1), V(), m.className = "mbLoading", h && M == "inline" && !e.inlineClone && h.adopt(g.getChildren()), t[s][2] || (t[s][2] = ""), C = t[s][2].split(" "), k = C.length, k > 1 ? (A = C[k - 2].match("%") ? window.getWidth() * C[k - 2].replace("%", "") * .01 + "px" : C[k - 2] + "px", O = C[k - 1].match("%") ? window.getHeight() * C[k - 1].replace("%", "") * .01 + "px" : C[k - 1] + "px") : (A = "", O = ""), o = t[s][0], b = t[n][1].split("::"), o.match(/quietube\.com/i) ? (_ = o.split("v.php/"), o = _[1]) : o.match(/\/\/yfrog/i) && (M = o.substring(o.length - 1), M.match(/b|g|j|p|t/i) && (M = "image"), M == "s" && (M = "flash"), M.match(/f|z/i) && (M = "video"), o += ":iphone");
            if (o.match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i) || M == "image")M = "img", o = o.replace(/twitpic\.com/i, "twitpic.com/show/full"), h = new Image, h.onload = z, h.src = o; else if (o.match(/\.flv|\.mp4/i) || M == "video") {
                M = "obj", A = A || e.defaultWidth, O = O || e.defaultHeight;
                var o = (new URI(o)).toAbsolute();
                e.useNB ? h = new Swiff("" + e.playerpath + "?mediaURL=" + o + "&allowSmoothing=true&autoPlay=" + e.autoplay + "&buffer=6&showTimecode=" + e.showTimecode + "&loop=" + e.medialoop + "&controlColor=" + e.controlColor + "&controlBackColor=" + e.controlBackColor + "&defaultVolume=" + e.volume + "&scaleIfFullScreen=true&showScalingButton=true&crop=false", {id: "MediaboxSWF", width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}) : h = new Swiff("" + e.JWplayerpath + "?file=" + o + "&backcolor=" + e.backcolor + "&frontcolor=" + e.frontcolor + "&lightcolor=" + e.lightcolor + "&screencolor=" + e.screencolor + "&autostart=" + e.autoplay + "&controlbar=" + e.controlbar, {id: "MediaboxSWF", width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()
            } else o.match(/\.mp3|\.aac|tweetmic\.com|tmic\.fm/i) || M == "audio" ? (M = "obj", A = A || e.defaultWidth, O = O || "20px", o.match(/tweetmic\.com|tmic\.fm/i) && (o = o.split("/"), o[4] = o[4] || o[3], o = "http://media4.fjarnet.net/tweet/tweetmicapp-" + o[4] + ".mp3"), e.useNB ? h = new Swiff("" + e.playerpath + "?mediaURL=" + o + "&allowSmoothing=true&autoPlay=" + e.autoplay + "&buffer=6&showTimecode=" + e.showTimecode + "&loop=" + e.medialoop + "&controlColor=" + e.controlColor + "&controlBackColor=" + e.controlBackColor + "&defaultVolume=" + e.volume + "&scaleIfFullScreen=true&showScalingButton=true&crop=false", {id: "MediaboxSWF", width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}) : h = new Swiff("" + e.JWplayerpath + "?file=" + o + "&backcolor=" + e.backcolor + "&frontcolor=" + e.frontcolor + "&lightcolor=" + e.lightcolor + "&screencolor=" + e.screencolor + "&autostart=" + e.autoplay, {id: "MediaboxSWF", width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/\.swf/i) || M == "flash" ? (M = "obj", A = A || e.defaultWidth, O = O || e.defaultHeight, h = new Swiff(o, {id: "MediaboxSWF", width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/\.mov|\.m4v|\.m4a|\.aiff|\.avi|\.caf|\.dv|\.mid|\.m3u|\.mp3|\.mp2|\.mp4|\.qtz/i) || M == "qt" ? (M = "qt", A = A || e.defaultWidth, O = parseInt(O) + 16 + "px" || e.defaultHeight, h = new Quickie(o, {id: "MediaboxQT", width: A, height: O, attributes: {controller: e.controller, autoplay: e.autoplay, volume: e.volume, loop: e.medialoop, bgcolor: e.bgcolor}}), z()) : o.match(/blip\.tv/i) ? (M = "obj", A = A || "640px", O = O || "390px", h = new Swiff(o, {src: o, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/break\.com/i) ? (M = "obj", A = A || "464px", O = O || "376px", D = o.match(/\d{6}/g), h = new Swiff("http://embed.break.com/" + D, {width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/dailymotion\.com/i) ? (M = "obj", A = A || "480px", O = O || "381px", h = new Swiff(o, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/facebook\.com/i) ? (M = "obj", A = A || "320px", O = O || "240px", _ = o.split("v="), _ = _[1].split("&"), D = _[0], h = new Swiff("http://www.facebook.com/v/" + D, {movie: "http://www.facebook.com/v/" + D, classid: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000", width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/flickr\.com(?!.+\/show\/)/i) ? (M = "obj", A = A || "500px", O = O || "375px", _ = o.split("/"), D = _[5], h = new Swiff("http://www.flickr.com/apps/video/stewart.swf", {id: D, classid: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000", width: A, height: O, params: {flashvars: "photo_id=" + D + "&amp;show_info_box=" + e.flInfo, wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/gametrailers\.com/i) ? (M = "obj", A = A || "480px", O = O || "392px", D = o.match(/\d{5}/g), h = new Swiff("http://www.gametrailers.com/remote_wrap.php?mid=" + D, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/google\.com\/videoplay/i) ? (M = "obj", A = A || "400px", O = O || "326px", _ = o.split("="), D = _[1], h = new Swiff("http://video.google.com/googleplayer.swf?docId=" + D + "&autoplay=" + e.autoplayNum, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/megavideo\.com/i) ? (M = "obj", A = A || "640px", O = O || "360px", _ = o.split("="), D = _[1], h = new Swiff("http://wwwstatic.megavideo.com/mv_player.swf?v=" + D, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/metacafe\.com\/watch/i) ? (M = "obj", A = A || "400px", O = O || "345px", _ = o.split("/"), D = _[4], h = new Swiff("http://www.metacafe.com/fplayer/" + D + "/.swf?playerVars=autoPlay=" + e.autoplayYes, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/vids\.myspace\.com/i) ? (M = "obj", A = A || "425px", O = O || "360px", h = new Swiff(o, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/revver\.com/i) ? (M = "obj", A = A || "480px", O = O || "392px", _ = o.split("/"), D = _[4], h = new Swiff("http://flash.revver.com/player/1.0/player.swf?mediaId=" + D + "&affiliateId=" + e.revverID + "&allowFullScreen=" + e.revverFullscreen + "&autoStart=" + e.autoplay + "&backColor=#" + e.revverBack + "&frontColor=#" + e.revverFront + "&gradColor=#" + e.revverGrad + "&shareUrl=revver", {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/rutube\.ru/i) ? (M = "obj", A = A || "470px", O = O || "353px", _ = o.split("="), D = _[1], h = new Swiff("http://video.rutube.ru/" + D, {movie: "http://video.rutube.ru/" + D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/seesmic\.com/i) ? (M = "obj", A = A || "435px", O = O || "355px", _ = o.split("/"), D = _[5], h = new Swiff("http://seesmic.com/Standalone.swf?video=" + D, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/tudou\.com/i) ? (M = "obj", A = A || "400px", O = O || "340px", _ = o.split("/"), D = _[5], h = new Swiff("http://www.tudou.com/v/" + D, {width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/twitcam\.com/i) ? (M = "obj", A = A || "320px", O = O || "265px", _ = o.split("/"), D = _[3], h = new Swiff("http://static.livestream.com/chromelessPlayer/wrappers/TwitcamPlayer.swf?hash=" + D, {width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/twiturm\.com/i) ? (M = "obj", A = A || "402px", O = O || "48px", _ = o.split("/"), D = _[3], h = new Swiff("http://twiturm.com/flash/twiturm_mp3.swf?playerID=0&sf=" + D, {width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/twitvid\.com/i) ? (M = "obj", A = A || "600px", O = O || "338px", _ = o.split("/"), D = _[3], h = new Swiff("http://www.twitvid.com/player/" + D, {width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/ustream\.tv/i) ? (M = "obj", A = A || "400px", O = O || "326px", h = new Swiff(o + "&amp;viewcount=" + e.usViewers + "&amp;autoplay=" + e.autoplay, {width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/youku\.com/i) ? (M = "obj", A = A || "480px", O = O || "400px", _ = o.split("id_"), D = _[1], h = new Swiff("http://player.youku.com/player.php/sid/" + D + "=/v.swf", {width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/youtube\.com\/watch/i) ? (_ = o.split("v="), e.html5 ? (M = "url", A = A || "640px", O = O || "385px", D = "mediaId_" + (new Date).getTime(), h = new Element("iframe", {src: "http://www.youtube.com/embed/" + _[1], id: D, width: A, height: O, frameborder: 0, allowTransparency: !0}), z()) : (M = "obj", D = _[1], D.match(/fmt=22/i) ? (P = "&ap=%2526fmt%3D22", A = A || "640px", O = O || "385px") : D.match(/fmt=18/i) ? (P = "&ap=%2526fmt%3D18", A = A || "560px", O = O || "345px") : (P = e.ytQuality, A = A || "480px", O = O || "295px"), h = new Swiff("http://www.youtube.com/v/" + D + "&autoplay=" + e.autoplayNum + "&fs=" + e.fullscreenNum + P + "&border=" + e.ytBorder + "&color1=0x" + e.ytColor1 + "&color2=0x" + e.ytColor2 + "&rel=" + e.ytRel + "&showinfo=" + e.ytInfo + "&showsearch=" + e.ytSearch, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z())) : o.match(/youtube\.com\/view/i) ? (M = "obj", _ = o.split("p="), D = _[1], A = A || "480px", O = O || "385px", h = new Swiff("http://www.youtube.com/p/" + D + "&autoplay=" + e.autoplayNum + "&fs=" + e.fullscreenNum + P + "&border=" + e.ytBorder + "&color1=0x" + e.ytColor1 + "&color2=0x" + e.ytColor2 + "&rel=" + e.ytRel + "&showinfo=" + e.ytInfo + "&showsearch=" + e.ytSearch, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/veoh\.com/i) ? (M = "obj", A = A || "410px", O = O || "341px", o = o.replace("%3D", "/"), _ = o.split("watch/"), D = _[1], h = new Swiff("http://www.veoh.com/static/swf/webplayer/WebPlayer.swf?version=AFrontend.5.5.2.1001&permalinkId=" + D + "&player=videodetailsembedded&videoAutoPlay=" + e.AutoplayNum + "&id=anonymous", {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/viddler\.com/i) ? (M = "obj", A = A || "437px", O = O || "370px", _ = o.split("/"), D = _[4], h = new Swiff(o, {id: "viddler_" + D, movie: o, classid: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000", width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen, id: "viddler_" + D, movie: o}}), z()) : o.match(/viddyou\.com/i) ? (M = "obj", A = A || "416px", O = O || "312px", _ = o.split("="), D = _[1], h = new Swiff("http://www.viddyou.com/get/v2_" + e.vuPlayer + "/" + D + ".swf", {id: D, movie: "http://www.viddyou.com/get/v2_" + e.vuPlayer + "/" + D + ".swf", width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/vimeo\.com/i) ? (A = A || "640px", O = O || "360px", _ = o.split("/"), D = _[3], e.html5 ? (M = "url", D = "mediaId_" + (new Date).getTime(), h = new Element("iframe", {src: "http://player.vimeo.com/video/" + _[3] + "?portrait=" + e.vmPortrait, id: D, width: A, height: O, frameborder: 0, allowTransparency: !0}), z()) : (M = "obj", h = new Swiff("http://www.vimeo.com/moogaloop.swf?clip_id=" + D + "&amp;server=www.vimeo.com&amp;fullscreen=" + e.fullscreenNum + "&amp;autoplay=" + e.autoplayNum + "&amp;show_title=" + e.vmTitle + "&amp;show_byline=" + e.vmByline + "&amp;show_portrait=" + e.vmPortrait + "&amp;color=" + e.vmColor, {id: D, width: A, height: O, params: {wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z())) : o.match(/12seconds\.tv/i) ? (M = "obj", A = A || "430px", O = O || "360px", _ = o.split("/"), D = _[5], h = new Swiff("http://embed.12seconds.tv/players/remotePlayer.swf", {id: D, width: A, height: O, params: {flashvars: "vid=" + D + "", wmode: e.wmode, bgcolor: e.bgcolor, allowscriptaccess: e.scriptaccess, allowfullscreen: e.fullscreen}}), z()) : o.match(/\#mb_/i) ? (M = "inline", A = A || e.defaultWidth, O = O || e.defaultHeight, URLsplit = o.split("#"), h = document.id(URLsplit[1]), z()) : (M = "url", A = A || e.defaultWidth, O = O || e.defaultHeight, D = "mediaId_" + (new Date).getTime(), h = new Element("iframe", {src: o, id: D, width: A, height: O, frameborder: 0, allowTransparency: !0}), z())
        }
        return!1
    }

    function z() {
        M == "img" ? g.addEvent("click", R) : g.removeEvent("click", R), M == "img" ? (A = h.width, O = h.height, e.imgBackground ? g.setStyles({backgroundImage: "url(" + N + ")", display: ""}) : (O >= l - e.imgPadding && O / l >= A / f ? (O = l - e.imgPadding, A = h.width = parseInt(O / h.height * A), h.height = O) : A >= f - e.imgPadding && O / l < A / f && (A = f - e.imgPadding, O = h.height = parseInt(A / h.width * O), h.width = A), Browser.ie && (h = document.id(h)), h.addEvent("mousedown",function (e) {
            e.stop()
        }).addEvent("contextmenu", function (e) {
            e.stop()
        }), g.setStyles({backgroundImage: "none", display: ""}), h.inject(g))) : M == "inline" ? (g.setStyles({backgroundImage: "none", display: ""}), e.inlineClone ? g.grab(h.get("html")) : g.adopt(h.getChildren())) : M == "qt" ? (g.setStyles({backgroundImage: "none", display: ""}), h.inject(g)) : M == "url" ? (g.setStyles({backgroundImage: "none", display: ""}), h.inject(g)) : M == "ios" || Browser.Platform.ios ? (g.setStyles({backgroundImage: "none", display: ""}), g.set("html", e.linkText.replace(/{x}/gi, N)), A = e.DefaultWidth, O = e.DefaultHeight) : M == "obj" ? Browser.Plugins.Flash.version < "8" ? (g.setStyles({backgroundImage: "none", display: ""}), g.set("html", '<div id="mbError"><b>Error</b><br/>Adobe Flash is either not installed or not up to date, please visit <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Get Flash" target="_new">Adobe.com</a> to download the free player.</div>'), A = e.DefaultWidth, O = e.DefaultHeight) : (g.setStyles({backgroundImage: "none", display: ""}), h.inject(g)) : (g.setStyles({backgroundImage: "none", display: ""}), g.set("html", e.flashText), A = e.defaultWidth, O = e.defaultHeight), g.setStyles({width: A, height: O}), E.setStyles({width: A}), w.set("html", e.showCaption ? b[0] : ""), E.set("html", e.showCaption && b.length > 1 ? b[1] : ""), S.set("html", e.showCounter && t.length > 1 ? e.counterText.replace(/{x}/, n + 1).replace(/{y}/, t.length) : ""), r >= 0 && t[r][0].match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i) && (p.src = t[r][0].replace(/twitpic\.com/i, "twitpic.com/show/full")), i >= 0 && t[i][0].match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i) && (d.src = t[i][0].replace(/twitpic\.com/i, "twitpic.com/show/full")), A = g.offsetWidth, O = g.offsetHeight + y.offsetHeight, O >= s + s ? o = -s : o = -(O / 2), A >= u + u ? a = -u : a = -(A / 2), e.resizeOpening ? c.resize.start({width: A, height: O, marginTop: o - H, marginLeft: a - H}) : (m.setStyles({width: A, height: O, marginTop: o - H, marginLeft: a - H}), W())
    }

    function W() {
        c.image.start(1)
    }

    function X() {
        m.className = "", r >= 0 && (x.style.display = ""), i >= 0 && (T.style.display = ""), c.bottom.start(1)
    }

    function V() {
        h && (M == "inline" && !e.inlineClone && h.adopt(g.getChildren()), h.onload = function () {
        }), c.resize.cancel(), c.image.cancel().set(0), c.bottom.cancel().set(0), $$(x, T).setStyle("display", "none")
    }

    function $() {
        if (n >= 0) {
            M == "inline" && !e.inlineClone && h.adopt(g.getChildren()), h.onload = function () {
            }, g.empty();
            for (var t in c)c[t].cancel();
            m.setStyle("display", "none"), c.overlay.chain(F).start(0)
        }
        return window.fireEvent("mb_close"), !1
    }

    var e, t, n, r, i, s, o, u, a, f, l, c, h, p = new Image, d = new Image, v, m, g, y, b, w, E, S, x, T, N, C, k, L, A, O, M = "none", _, D = "mediaBox", P, H;
    window.addEvent("domready", function () {
        document.id(document.body).adopt($$([v = (new Element("div", {id: "mbOverlay"})).addEvent("click", $), m = new Element("div", {id: "mbCenter"})]).setStyle("display", "none")), g = (new Element("div", {id: "mbImage"})).inject(m, "inside"), y = (new Element("div", {id: "mbBottom"})).inject(m, "inside").adopt(closeLink = (new Element("a", {id: "mbCloseLink", href: "#"})).addEvent("click", $), T = (new Element("a", {id: "mbNextLink", href: "#"})).addEvent("click", R), x = (new Element("a", {id: "mbPrevLink", href: "#"})).addEvent("click", q), w = new Element("div", {id: "mbTitle"}), S = new Element("div", {id: "mbNumber"}), E = new Element("div", {id: "mbCaption"})), c = {overlay: (new Fx.Tween(v, {property: "opacity", duration: 360})).set(0), image: new Fx.Tween(g, {property: "opacity", duration: 360, onComplete: X}), bottom: (new Fx.Tween(y, {property: "opacity", duration: 240})).set(0)}
    }), Mediabox = {close: function () {
        $()
    }, open: function (n, r, i) {
        e = {buttonText: ["<big>&laquo;</big>", "<big>&raquo;</big>", "<big>&times;</big>"], counterText: "({x} of {y})", linkText: '<a href="{x}" target="_new">{x}</a><br/>open in a new tab</div>', flashText: '<b>Error</b><br/>Adobe Flash is either not installed or not up to date, please visit <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Get Flash" target="_new">Adobe.com</a> to download the free player.', center: !0, loop: !1, keyboard: !0, keyboardAlpha: !1, keyboardStop: !1, overlayOpacity: .7, resizeOpening: !0, resizeDuration: 240, initialWidth: 320, initialHeight: 180, defaultWidth: 640, defaultHeight: 360, showCaption: !0, showCounter: !0, iOShtml: !0, imgBackground: !1, imgPadding: 100, overflow: "auto", inlineClone: !1, html5: "true", scriptaccess: "true", fullscreen: "true", fullscreenNum: "1", autoplay: "true", autoplayNum: "1", autoplayYes: "yes", volume: "100", medialoop: "true", bgcolor: "#000000", wmode: "opaque", useNB: !0, playerpath: "assets/mootools/mediabox/1.4.6/NonverBlaster.swf", controlColor: "0xFFFFFF", controlBackColor: "0x000000", showTimecode: "false", JWplayerpath: "assets/mootools/mediabox/1.4.6/player.swf", backcolor: "000000", frontcolor: "999999", lightcolor: "000000", screencolor: "000000", controlbar: "over", controller: "true", flInfo: "true", revverID: "187866", revverFullscreen: "true", revverBack: "000000", revverFront: "ffffff", revverGrad: "000000", usViewers: "true", ytBorder: "0", ytColor1: "000000", ytColor2: "333333", ytQuality: "&ap=%2526fmt%3D18", ytRel: "0", ytInfo: "1", ytSearch: "0", vuPlayer: "basic", vmTitle: "1", vmByline: "1", vmPortrait: "1", vmColor: "ffffff"}, e = Object.merge(e, i), x.set("html", e.buttonText[0]), T.set("html", e.buttonText[1]), closeLink.set("html", e.buttonText[2]), H = m.getStyle("padding-left").toInt() + g.getStyle("margin-left").toInt() + g.getStyle("padding-left").toInt(), Browser.firefox2 && (e.overlayOpacity = 1, v.className = "mbOverlayOpaque");
        if (Browser.Platform.ios || Browser.ie6)Browser.Platform.ios && (e.keyboard = !1), e.resizeOpening = !1, v.className = "mbOverlayAbsolute", v.setStyle("position", "absolute"), B();
        return typeof n == "string" && (n = [
            [n, r, i]
        ], r = 0), t = n, e.loop = e.loop && t.length > 1, j(), F(!0), s = window.getScrollTop() + window.getHeight() / 2, u = window.getScrollLeft() + window.getWidth() / 2, c.resize = new Fx.Morph(m, {duration: e.resizeDuration, onComplete: W}), m.setStyles({top: s, left: u, width: e.initialWidth, height: e.initialHeight, marginTop: -(e.initialHeight / 2) - H, marginLeft: -(e.initialWidth / 2) - H, display: ""}), c.overlay.start(e.overlayOpacity), U(r)
    }}, Element.implement({mediabox: function (e, t) {
        return $$(this).mediabox(e, t), this
    }}), Elements.implement({mediabox: function (e, t, n) {
        t = t || function (e) {
            return L = e.rel.split(/[\[\]]/), L = L[1], [e.get("href"), e.title, L]
        }, n = n || function () {
            return!0
        };
        var r = this;
        return r.removeEvents("click").addEvent("click", function () {
            var i = r.filter(n, this), s = [], o = [];
            return i.each(function (e, t) {
                o.indexOf(e.toString()) < 0 && (s.include(i[t]), o.include(i[t].toString()))
            }), Mediabox.open(s.map(t), o.indexOf(this.toString()), e)
        }), r
    }})
})();
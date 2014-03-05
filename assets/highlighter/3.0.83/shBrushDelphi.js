/* SyntaxHighlighter 3.0.83, (c) 2004-2010 Alex Gorbatchev, http://alexgorbatchev.com/SyntaxHighlighter */
(function () {
    function e() {
        var e = "abs addr and ansichar ansistring array as asm begin boolean byte cardinal case char class comp const constructor currency destructor div do double downto else end except exports extended false file finalization finally for function goto if implementation in inherited int64 initialization integer interface is label library longint longword mod nil not object of on or packed pansichar pansistring pchar pcurrency pdatetime pextended pint64 pointer private procedure program property pshortstring pstring pvariant pwidechar pwidestring protected public published raise real real48 record repeat set shl shortint shortstring shr single smallint string then threadvar to true try type unit until uses val var varirnt while widechar widestring with word write writeln xor";
        this.regexList = [
            {regex: /\(\*[\s\S]*?\*\)/gm, css: "comments"},
            {regex: /{(?!\$)[\s\S]*?}/gm, css: "comments"},
            {regex: SyntaxHighlighter.regexLib.singleLineCComments, css: "comments"},
            {regex: SyntaxHighlighter.regexLib.singleQuotedString, css: "string"},
            {regex: /\{\$[a-zA-Z]+ .+\}/g, css: "color1"},
            {regex: /\b[\d\.]+\b/g, css: "value"},
            {regex: /\$[a-zA-Z0-9]+\b/g, css: "value"},
            {regex: new RegExp(this.getKeywords(e), "gmi"), css: "keyword"}
        ]
    }

    typeof require != "undefined" ? SyntaxHighlighter = require("shCore").SyntaxHighlighter : null, e.prototype = new SyntaxHighlighter.Highlighter, e.aliases = ["delphi", "pascal", "pas"], SyntaxHighlighter.brushes.Delphi = e, typeof exports != "undefined" ? exports.Brush = e : null
})();
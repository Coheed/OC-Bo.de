<style type="text/css">

.no-select {
    -moz-user-select: none;
}
html {
    height: 100%;
}
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, p, blockquote, th, td, iframe {
    margin: 0;
    padding: 0;
}
table {
    border-collapse: collapse;
}
fieldset, img {
    border: 0 none;
}
address, caption, cite, code, dfn, em, strong, th, var {
    font-style: normal;
    font-weight: normal;
}
ol, ul {
    list-style: none outside none;
}
caption, th {
    text-align: left;
}
h1, h2, h3, h4, h5, h6 {
    font-size: 100%;
}
q:before, q:after {
    content: "";
}
body {
    background-color: #FFFFFF;
    font: x-small verdana,arial,helvetica,sans-serif;
    min-height: 100%;
    z-index: 1;
}
textarea {
    font: small verdana,arial,helvetica,sans-serif;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    cursor: pointer;
}
button[disabled], html input[disabled] {
    cursor: default;
}
input[type="hidden"] {
    position: absolute;
}
h1 {
    font-size: 18px;
    font-weight: normal;
    margin: 10px 0;
}
h2 {
    color: #336699;
    font-size: 13px;
}
h2 a {
    text-decoration: none;
}
h2 a:visited {
    color: #336699;
}
h2 a:hover {
    text-decoration: underline;
}
h3 {
    font-size: 110%;
}
a img {
    border: 0 none;
}
a {
    color: #336699;
    text-decoration: none;
}
.rounded {
    border-radius: 7px;
}
.rounded .morelink {
    border-top-right-radius: 6px;
}
div.autosize {
    display: table;
    width: 1px;
}
div.autosize > div {
    display: table-cell;
}
input.txt {
    background-color: #F7F7F7;
    border: 1px solid #336699;
}
input[type="checkbox"], input[type="radio"] {
    margin-top: 0.4em;
}
label.disabled {
    color: #808080;
}
.wrong {
    color: #FF0000;
    font-weight: normal;
}
.attention {
    border: 1px solid #FF6600;
    border-radius: 7px;
    font-weight: bold;
    padding: 3px;
}
.subform input.text {
    width: 25em;
}
.subform textarea.text {
    width: 25em;
}
.subform label {
    margin: 0 5px;
}
.subform td {
    padding: 0 5px 5px 0;
}
.subform td.nopadding {
    padding: 0;
}
.nowrap {
    white-space: nowrap;
}
.leftpad {
    padding-left: 1em;
}
.nomargin {
    margin: 0;
}
.nopadding {
    padding: 0;
}
.fancybutton {
    background: -moz-linear-gradient(center top , #D4E3F2, #ADC9E6) repeat scroll 0 0 #ADC9E6;
    border: 1px solid #5E96CF;
    border-radius: 7px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;
    color: #2E6399;
    font-weight: bold;
    padding: 5px 10px;
    text-decoration: none;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.7);
}
.fancybutton:hover {
    background: -moz-linear-gradient(center top , #E4EDF7, #D4E3F2) repeat scroll 0 0 #D4E3F2;
}
.fancybutton:focus, .fancybutton:active {
    background: -moz-linear-gradient(center top , #ADC9E6, #D4E3F2) repeat scroll 0 0 #D4E3F2;
    box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.7) inset;
}
.fancybutton.disabled, .fancybutton.disabled:active {
    background: -moz-linear-gradient(center top , #E9EDF1, #DCE3EA) repeat scroll 0 0 #D4E3F2;
    border-color: #999999;
    color: #999999;
}
.hover a:hover {
    text-decoration: underline;
}
.selected, .choice.primary {
    font-weight: bold;
}
.flat-list {
    display: inline;
    list-style-type: none;
}
.flat-list li, .flat-list form {
    display: inline;
    white-space: nowrap;
}
.flat-list li a.gold {
    color: #9A7D2E;
    font-weight: bold;
}
.flat-list li.selected a {
    color: #FF4500;
}
.link .flat-list {
    display: block;
    padding: 1px 0;
}
.link.compressed .flat-list {
    display: inline-block;
    padding: 0 0 1px;
}
ul.flat-vert {
    text-align: left;
}
.flat-vert .separator {
    margin: 0;
}
.flat-vert.title {
    color: #777777;
    font-family: arial,verdana,helvetica,sans-serif;
    font-size: 18px;
    font-weight: normal;
    margin-bottom: 5px;
}
.separator {
    color: #808080;
    cursor: default;
    margin: 0 0.7ex;
}
.pref-lang {
    font-weight: bold;
}
.pref {
    font-weight: bold;
}
#jumpToContent {
    font-weight: bold;
    left: 135px;
    margin-left: -1000px;
    position: absolute;
    top: 25px;
}
#jumpToContent:focus {
    margin-left: 0 !important;
}
#header {
    background-color: #CEE3F8;
    border-bottom: 1px solid #5F99CF;
    position: relative;
    z-index: 99;
}
#header-img {
    margin-right: 5px;
    margin-top: 2px;
}
#header-img.default-header {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -313px;
    background-repeat: no-repeat;
    display: inline-block;
    height: 40px;
    margin-bottom: 3px;
    text-indent: -9999px;
    vertical-align: bottom;
    width: 120px;
}
#header-top {
    position: absolute;
    right: 5px;
}
#header-bottom-left {
    font-size: larger;
}
#header-bottom-right {
    background-color: #EFF7FF;
    border-top-left-radius: 7px;
    bottom: 0;
    line-height: 12px;
    padding: 4px;
    position: absolute;
    right: 0;
}
#mail {
    display: inline-block;
    height: 10px;
    overflow: hidden;
    position: relative;
    text-indent: -9999px;
    top: 2px;
    width: 15px;
}
#mail.havemail {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -105px -796px;
    background-repeat: no-repeat;
}
#mail.nohavemail {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -29px -817px;
    background-repeat: no-repeat;
}
#modmail {
    display: inline-block;
    height: 16px;
    margin-bottom: -6px;
    overflow: hidden;
    position: relative;
    text-indent: -9999px;
    top: -2px;
    width: 16px;
}
#modmail.havemail {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -708px;
    background-repeat: no-repeat;
}
#modmail.nohavemail {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -730px;
    background-repeat: no-repeat;
}
.user {
    color: #808080;
}
.user .userkarma {
    border-bottom: 1px dotted #808080;
    cursor: help;
    font-weight: bold;
}
.pagename {
    font-size: 1.2em;
    font-variant: small-caps;
    font-weight: bold;
    margin-right: 1ex;
    vertical-align: bottom;
}
.pagename a {
    color: #000000;
}
.newpagelink {
    background-color: #FFFF99;
    padding: 3px 5px;
}
.dropdown {
    cursor: default;
    display: inline;
    position: relative;
}
.drop-choices.inuse {
    display: block;
}
.drop-choices {
    background-color: #FFFFFF;
    border: 1px solid #808080;
    display: none;
    left: 0;
    line-height: normal;
    margin-top: 1px;
    position: absolute;
    white-space: nowrap;
    z-index: 100;
}
.drop-choices a.choice {
    cursor: pointer;
    display: block;
    padding: 2px 3px 1px;
}
.drop-choices a.choice:hover {
    background-color: #C7DEF7;
}
.drop-choices a.choice.selected {
    display: none;
}
.dropdown.heavydrop .selected {
    background: url("../droparrow.gif") no-repeat scroll right center #FFFFFF;
    border: 1px solid #808080;
    font-weight: bold;
    padding: 2px 23px 2px 5px;
}
.dropdown.lightdrop .selected {
    background: url("../droparrowgray.gif") no-repeat scroll right center rgba(0, 0, 0, 0);
    color: #808080;
    padding-right: 21px;
    position: relative;
    text-decoration: underline;
}
.drop-choices.lightdrop {
    margin-top: 2px;
}
.dropdown.tabdrop .selected {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: url("../droparrowgray.gif") no-repeat scroll right center #FFFFFF;
    border-color: #5F99CF #5F99CF -moz-use-text-color;
    border-image: none;
    border-style: solid solid none;
    border-width: 1px 1px medium;
    color: #FF4500;
    margin-left: 3px;
    padding: 2px 21px 1px 5px;
    position: relative;
}
.dropdown.tabdrop .selected.title {
    background-color: #EFF7FF;
    border: medium none;
    color: #336699;
    padding-bottom: 0;
}
.drop-choices.tabdrop {
    margin-top: 2px;
}
.dropdown-title.tabdrop {
    display: none;
}
.drop-choices .choice.hidden {
    display: none;
}
.tabmenu {
    display: inline-block;
    list-style-type: none;
    margin-top: 5px;
    vertical-align: bottom;
    white-space: nowrap;
}
.tabmenu li {
    display: inline;
    font-weight: bold;
    margin: 0 3px;
}
.tabmenu li a {
    background-color: #EFF7FF;
    padding: 2px 6px 0;
}
.tabmenu li.selected a {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #FFFFFF;
    border-color: #5F99CF #5F99CF #FFFFFF;
    border-image: none;
    border-style: solid;
    border-width: 1px;
    color: #FF4500;
    z-index: 100;
}
.tabpane-content {
    border: 1px solid #5F99CF;
    padding: 4px;
}
#search input[type="text"] {
    border: 1px solid #808080;
    font-size: 18px;
    padding: 2px;
    width: 295px;
}
.content {
    margin: 7px 5px 0;
    z-index: 1;
}
.content .spacer {
    margin-bottom: 5px;
}
.state-button {
    display: inline;
}
.side {
    background-color: #FFFFFF;
    float: right;
    margin: 0 5px;
    width: 300px;
}
.side .spacer {
    margin: 7px 0 12px;
}
.side .side-message {
    background: none no-repeat scroll 10px 10px #FAF2CE;
    border: 1px solid #EDCE42;
    border-radius: 2px;
    line-height: 1.75em;
    padding: 10px;
}
.side .side-message:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -642px;
    background-repeat: no-repeat;
    content: "";
    display: inline-block;
    float: left;
    height: 16px;
    margin-right: 7px;
    width: 16px;
}
.side .side-message p {
    font-size: 0.9em;
    margin: 0;
}
.side .side-message p strong {
    display: block;
    font-size: 1.25em;
    font-weight: normal;
}
.side .side-message p + p {
    margin-top: 0.25em;
}
.side .side-message.gold {
    border: 1px solid #D5C9A9;
    border-radius: 0;
    box-shadow: 0 0 10px #EBE5D5 inset;
    font-family: serif;
}
.side .side-message.gold:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -817px;
    background-repeat: no-repeat;
    height: 14px;
    margin-top: 1px;
    width: 13px;
}
.morelink {
    background: url("sprite-reddit.hV9obzo72Pc.png") repeat scroll 0 -278px #FFFFFF;
    border: 1px solid #C4DBF1;
    display: block;
    font-size: 150%;
    font-weight: bold;
    height: 29px;
    letter-spacing: -1px;
    line-height: 29px;
    position: relative;
    text-align: center;
}
.morelink:hover, .mlh {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -243px;
    background-repeat: repeat;
    border-color: #879EB4;
}
.morelink a {
    color: #336699;
    display: block;
    height: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 100%;
}
.morelink:hover a {
    color: #FFFFFF;
}
.morelink .nub {
    background: url("sprite-reddit.hV9obzo72Pc.png") no-repeat scroll -30px -547px #FFFFFF;
    height: 31px;
    position: absolute;
    right: -1px;
    top: -1px;
    width: 24px;
}
.morelink:hover .nub, .mlhn {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -547px;
    background-repeat: no-repeat;
}
.disabled .morelink, .disabled .morelink:hover {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -208px;
    background-repeat: repeat;
    border-color: #DADADA;
}
.disabled .morelink a {
    color: #AAAAAA;
    cursor: default;
}
.disabled .morelink .nub, .disabled .morelink:hover .nub {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -76px -491px;
    background-repeat: no-repeat;
}
.raisedbox {
    background: none repeat scroll 0 0 #E0E0E0;
    border: 1px solid #808080;
    padding: 5px;
}
.raisedbox h4 {
    margin-bottom: 3px;
}
.raisedbox li {
    margin-bottom: 2px;
}
.sidebox .spacer {
    background: none no-repeat scroll left top #FFFFFF;
    margin-top: 10px;
    min-height: 41px;
    padding: 5px 0 0 44px;
    position: relative;
}
.sidebox .spacer.no-icon {
    min-height: 0;
    padding: 0;
}
.sidebox .spacer a {
    display: block;
    height: 40px;
    left: 0;
    position: absolute;
    top: 0;
    width: 40px;
}
.sidebox.create .spacer a {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -76px -359px;
    background-repeat: no-repeat;
}
.sidebox.gold .spacer a {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -76px -435px;
    background-repeat: no-repeat;
}
.sidebox.gold .morelink {
    background-color: rgba(0, 0, 0, 0);
    background-image: url("../goldmorelink.png");
    background-position: 0 0;
    background-repeat: no-repeat;
    border: medium none;
    height: 31px;
}
.sidebox.gold .morelink a, .sidebox.gold .morelink a:visited {
    color: #9A7D2E;
}
.sidebox.gold .morelink:hover {
    background-position: 0 -31px;
}
.sidebox.gold .morelink:hover a {
    color: #FFFFFF;
    margin-top: 1px;
}
.sidebox.gold .morelink .nub {
    display: none;
}
.sidebox .subtitle {
    color: #696969;
    font-size: 110%;
    margin-left: 10px;
}
.account-activity-box {
    text-align: center;
}
#account-activity table {
    font-size: larger;
    margin: 2em 0 0 2em;
    width: 45em;
}
#account-activity th {
    font-weight: bold;
}
#account-activity td {
    padding: 0.5em 0;
}
.infotable {
    margin-bottom: 10px;
    margin-top: 5px;
}
.infotable .small {
    font-size: smaller;
}
.infotable td {
    padding-right: 1em;
}
.infotable a:hover {
    text-decoration: underline;
}
.infotable .state-button a {
    background-color: #F0F0F0;
    color: #808080;
}
.infotable .bold {
    font-weight: bold;
}
.infotable .invalid-user {
    background-color: #FFC0CB;
}
.infotable .organic-vote {
    border: 1px solid #008000;
}
.profile-attr .label {
    font-weight: bold;
}
.profile-attr .value {
    color: #404040;
    margin-right: 5px;
}
.profile-attr .md {
    border-color: #B2B2B2 #D0D0D0 #D0D0D0 #B2B2B2;
    border-style: solid;
    border-width: 1px;
    margin-left: 10px;
    margin-top: 5px;
    padding: 10px;
}
.profile-attr .md ul {
    float: none;
    list-style-type: disc;
    margin-left: 15px;
}
.profile-attr .md p {
    margin-top: 0;
}
.question {
    color: #FF0000;
}
.question .yes {
    margin-left: 5px;
    margin-right: 3px;
}
.question .no {
    margin: 0 3px;
}
.preload {
    left: -1000px;
    position: absolute;
    top: -1000px;
}
.arrow {
    background-position: center center;
    background-repeat: no-repeat;
    cursor: pointer;
    display: block;
    height: 14px;
    margin: 2px auto 0;
    outline: medium none;
    width: 15px;
}
.arrow.upmod {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -84px -796px;
    background-repeat: no-repeat;
}
.arrow.downmod {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -42px -796px;
    background-repeat: no-repeat;
}
.arrow.up {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -63px -796px;
    background-repeat: no-repeat;
}
.arrow.down {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -21px -796px;
    background-repeat: no-repeat;
}
.midcol {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    float: left;
    margin-left: 7px;
    margin-right: 4px;
    overflow: hidden;
}
body > .content .link.compressed .midcol {
    margin-right: 5px;
    width: 15px;
}
.entry {
    margin-left: 3px;
    opacity: 1;
    overflow: hidden;
}
.domain {
    color: #888888;
    font-size: x-small;
    white-space: nowrap;
}
.domain a {
    color: #888888;
    display: inline-block;
    max-width: 19em;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: middle;
    white-space: nowrap;
}
.domain a:hover {
    max-width: none;
    text-decoration: underline;
}
.spam .domain, .spam .domain a {
    color: #000000;
}
.link-note {
    background-color: #FFFFFF;
    color: #FF4444;
    font-size: x-small;
}
.tagline {
    color: #888888;
    font-size: x-small;
}
.tagline a {
    color: #336699;
    text-decoration: none;
}
.tagline .friend {
    color: #FF4500;
}
.tagline .submitter {
    color: #0055DF;
}
.tagline .moderator, .green {
    color: #228822;
}
.tagline .admin {
    color: #FF0011;
}
.tagline .alum {
    color: #BE1337;
}
.tagline a.author.admin {
    font-weight: bold;
}
.tagline a:hover {
    text-decoration: underline;
}
.tagline .edited-timestamp {
    cursor: default;
}
.tagline .stickied-tagline {
    color: #228822;
}
.tagline .userattrs .cakeday {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -109px -774px;
    background-repeat: no-repeat;
    display: inline-block;
    height: 8px;
    text-indent: -9999px;
    vertical-align: middle;
    width: 11px;
}
a.author {
    margin-right: 0.5em;
}
.thing .parent .author {
    margin-right: 0.5em;
}
.flair, .linkflairlabel {
    background: none repeat scroll 0 0 #F5F5F5;
    border: 1px solid #DDDDDD;
    border-radius: 2px;
    color: #555555;
    display: inline-block;
    margin-right: 0.5em;
    padding: 0 2px;
}
.collapsed .flair {
    display: none;
}
.flair input {
    font-size: xx-small;
}
.linkflairlabel {
    font-size: x-small;
    max-width: 10em;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.link .flair {
    font-size: x-small;
    margin-top: -1px;
}
.flair-settings {
    margin-bottom: 16px;
}
.flairlist .flair-jump {
    margin-bottom: 1em;
}
.flairlist .flair-jump input[type="text"] {
    width: 430px;
}
.flair-jump button {
    font-size: 100%;
}
.flairlist.pretty-form {
    font-size: inherit;
}
.flairlisthome, .flairlist .nextprev {
    display: inline-block;
    margin-top: 10px;
}
.flairlisthome {
    font-size: smaller;
}
.flaircell, .flairlist .header {
    display: inline-block;
    margin-right: 4ex;
    text-align: center;
    width: 30ex;
}
.flair-entry {
    display: inline-block;
}
.flaircell.narrow, .flairlist .header.narrow {
    width: 14ex;
}
.flairsample-left {
    text-align: right !important;
}
.flairsample-right {
    text-align: left !important;
}
.flairrow .tagline {
    display: inline-block;
    margin-bottom: 8px;
    margin-left: 6px;
    text-align: left;
    width: 36ex;
}
.flairlist .flaircell input[type="text"] {
    width: 28ex;
}
.flairrow > form button {
    display: none;
}
.flairrow .edited button {
    display: inline-block;
}
.flairrow .flairdeletebtn {
    display: inline;
}
.flairrow:hover .flairdeletebtn {
    opacity: 1;
}
.flairselector {
    box-shadow: 4px 4px 4px #CCCCCC;
    font-size: x-small;
    position: absolute;
    width: 400px;
}
.flairselector img {
}
.flairselector h2 {
    background: none repeat scroll 0 0 #CEE3F8;
    margin-bottom: 3px;
    padding-bottom: 2px;
    text-align: center;
}
.flairselector.drop-choices.active {
    border: 1px solid #808080;
    display: block;
}
.flairselector .error {
    text-align: center;
}
.flairselector ul {
    display: inline-block;
    max-width: 200px;
    overflow: hidden;
    vertical-align: top;
}
.flairselector .selected, .flairselector.active li {
    display: block;
    font-weight: normal;
    text-decoration: none !important;
}
.flairselector li {
    border: 1px solid #FFFFFF;
    cursor: pointer;
    display: block !important;
    padding-left: 4px;
}
.flairselector li a {
    color: #336699 !important;
    font-weight: normal !important;
}
.flairselector li:hover {
    background-color: #BBBBBB;
    border: 1px solid #BBBBBB;
}
.flairselector li a:hover {
    text-decoration: none;
}
.flairselector li.selected {
    border: 1px dashed #000000;
}
.flairselector .title {
    font-size: x-small !important;
}
.flairselector form {
    border-top: 1px solid #808080;
    clear: both;
    display: block;
    padding-top: 4px;
    text-align: center;
}
.flairoptionpane {
    margin-bottom: 4px;
    max-height: 200px;
    overflow: auto;
    text-align: center;
}
.flairselector .customizer {
    display: inline-block;
}
.flairselector .customizer input {
    display: none;
}
.flairselector .customizer button {
    display: inline !important;
}
.flairselector .flairremove {
    display: none;
}
.media-button .option {
    color: #FF0000;
}
.media-button .option.active {
    background: url("sprite-reddit.hV9obzo72Pc.png") no-repeat scroll -107px -491px rgba(0, 0, 0, 0);
    color: #336699;
    padding-right: 15px;
}
.embededmedia {
    margin-left: 60px;
    margin-top: 5px;
}
.thing .title {
    color: #0000FF;
    margin-right: 0.4em;
    outline: medium none;
    overflow: hidden;
    padding: 0;
}
.thing .title:visited, .thing.visited .title {
    color: #551A8B;
}
.thing.stickied a.title, .thing.stickied a.title:visited, .thing.stickied a.title.visited {
    color: #228822;
    font-weight: bold;
}
body.with-listing-chooser.explore-page #header .pagename {
    position: static;
}
.explore-header {
    font-weight: bold;
    margin-bottom: 7px;
    padding: 5px 0;
}
.explore-header .explore-discuss-link {
    float: right;
    margin: 0.3em 10px 0 0;
}
.explore-header #explore-settings input {
    margin-left: 5px;
}
.explore-header #explore-settings button {
    color: #333333;
    font-weight: bold;
    line-height: 10px;
    margin-left: 8px;
}
.explore-header .explore-title {
    font-size: 1.3em;
}
.explore-item {
    margin-bottom: 1em;
}
.explore-item .explore-label {
    border-radius: 2px;
    display: inline-block;
    margin: 0 5px 1px 0;
    padding: 1px 2px 2px;
}
.explore-item .explore-label-type, .explore-item .explore-label-link {
    padding: 0 5px;
}
.explore-item .explore-sr-details {
    color: #777777;
    display: inline-block;
    font-size: x-small;
    font-weight: normal;
    margin-left: 3px;
}
.explore-item .explore-feedback {
    display: inline-block;
}
.explore-item .explore-feedback .fancy-toggle-button .add, .explore-item .explore-feedback .fancy-toggle-button .remove {
    background-color: rgba(0, 0, 0, 0);
    background-image: none;
    border: 1px solid #CCCCCC;
    border-radius: 2px;
    color: #AAAAAA;
    margin-left: 10px;
    padding-top: 0;
}
.explore-item .explore-feedback .fancy-toggle-button .add .option, .explore-item .explore-feedback .fancy-toggle-button .remove .option {
    line-height: 7px;
}
.explore-item .explore-feedback .fancy-toggle-button .add:hover, .explore-item .explore-feedback .fancy-toggle-button .remove:hover {
    border: 1px solid #444444;
    color: #FFFFFF;
}
.explore-item .explore-feedback .fancy-toggle-button .add:hover {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 0;
    background-repeat: repeat;
}
.explore-item .explore-feedback .fancy-toggle-button .remove:hover {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -182px;
    background-repeat: repeat;
}
.explore-item .explore-feedback .subscribe-button {
    display: inline-block;
    margin: 0 4px 0 0;
}
.explore-item .explore-feedback-dismiss {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -110px -642px;
    background-repeat: no-repeat;
    border: 3px solid rgba(0, 0, 0, 0);
    cursor: pointer;
    display: inline-block;
    height: 9px;
    margin-left: 4px;
    opacity: 0.3;
    text-indent: -9999px;
    vertical-align: middle;
    width: 9px;
}
.explore-item .explore-feedback-dismiss:hover {
    opacity: 1;
}
.explore-item .explore-sr {
    display: inline-block;
    font-size: 1.1em;
    font-weight: bold;
    height: 18px;
    line-height: 13px;
    margin-bottom: 3px;
    padding: 2px 4px;
}
.explore-item .midcol {
    display: none;
}
.explore-item .rank {
    display: none;
}
.explore-comment {
}
.explore-comment .explore-label {
    background-color: #CEE3F8;
    border: thin solid #5F99CF;
}
.explore-comment .tagline, .explore-comment .buttons, .explore-comment .thumbnail, .explore-comment .expando-button {
    display: none;
}
.explore-comment .comment {
    border-left: 2px solid #EEEEEE;
    color: #888888;
    margin: -3px 0 3px 5px;
    max-height: 100px;
    overflow: hidden;
    position: relative;
}
.explore-comment .comment .md {
    font-size: x-small;
    padding-bottom: 2px;
}
.explore-comment .comment .md p {
    margin: 5px;
}
.explore-comment .comment-fade {
    background: -moz-linear-gradient(center bottom , #FFFFFF 0%, rgba(255, 255, 255, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    bottom: 0;
    height: 10px;
    position: absolute;
    width: 100%;
}
.explore-comment .comment-link {
    color: #888888;
    display: inline-block;
    font-weight: bold;
    padding: 0 0 8px 5px;
}
.explore-page.res-nightmode .comment-fade {
    display: none;
}
.explore-hot .explore-label {
    background-color: #FFF088;
    border: thin solid #C4B487;
}
.explore-rising .explore-label {
    background-color: #D6FBCB;
    border: thin solid #448855;
}
.explore-discovery .explore-label {
    background-color: #DEDEDE;
    border: thin solid #AAAAAA;
}
.explore-subscribe-bubble {
    margin-left: 22px;
}
.sitetable {
    list-style-type: none;
}
.ajaxhook {
    left: 0;
    position: absolute;
    top: -1000px;
}
.nextprev, .next-suggestions {
    color: #808080;
    font-size: larger;
    margin-top: 10px;
}
.nextprev a, .next-suggestions a {
    background: none repeat scroll 0 0 #EEEEEE;
    border: 1px solid #DDDDDD;
    border-radius: 3px;
    font-weight: bold;
    padding: 1px 4px;
}
.nextprev a:hover, .next-suggestions a:hover {
    background: none repeat scroll 0 0 #F0F0F0;
    border: 1px solid #82A6C9;
}
.nextprev a:active, .next-suggestions a:active {
    background: none repeat scroll 0 0 #E4E4E4;
}
.nextprev .separator, .next-suggestions .separator {
    border-left: 1px solid #CCCCCC;
    margin: 0 0 0 0.5em;
    padding-left: 0.5em;
}
.next-suggestions {
    margin-left: 1.5em;
}
.next-suggestions a {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    font-weight: normal;
    margin-left: 0.5em;
}
.help a.help {
    color: #808080;
    text-decoration: underline;
}
.help.help-cover {
    background-color: #F8F8F8;
    border: 1px solid #808080;
    display: none;
    overflow: hidden;
    padding: 5px 10px 10px;
    position: relative;
}
.help p, .help form {
    font-size: 110%;
    margin: 5px;
}
.help form {
    display: inline;
}
.help-hoverable {
    cursor: help;
}
.hover-bubble {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #808080;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25);
    color: #333333;
    display: none;
    padding: 3px;
    position: absolute;
    z-index: 100;
}
.hover-bubble:before, .hover-bubble:after {
    content: "";
    display: block;
    position: absolute;
}
.hover-bubble.anchor-top:before, .hover-bubble.anchor-top:after {
    border: 9px solid rgba(0, 0, 0, 0);
    right: 8px;
}
.hover-bubble.anchor-top:before {
    border-bottom-color: #808080;
    top: -19px;
}
.hover-bubble.anchor-top:after {
    border-bottom-color: #FFFFFF;
    top: -18px;
}
.hover-bubble.anchor-top-left:before, .hover-bubble.anchor-top-left:after {
    border: 9px solid rgba(0, 0, 0, 0);
    left: 8px;
}
.hover-bubble.anchor-top-left:before {
    border-bottom-color: #808080;
    top: -19px;
}
.hover-bubble.anchor-top-left:after {
    border-bottom-color: #FFFFFF;
    top: -18px;
}
.hover-bubble.anchor-top-centered:before, .hover-bubble.anchor-top-centered:after {
    border: 9px solid rgba(0, 0, 0, 0);
    left: 50%;
    margin-left: -9px;
}
.hover-bubble.anchor-top-centered:before {
    border-bottom-color: #808080;
    top: -19px;
}
.hover-bubble.anchor-top-centered:after {
    border-bottom-color: #FFFFFF;
    top: -18px;
}
.hover-bubble.anchor-right:before, .hover-bubble.anchor-left:before, .hover-bubble.anchor-right:after, .hover-bubble.anchor-left:after {
    border: 9px solid rgba(0, 0, 0, 0);
    top: 8px;
}
.hover-bubble.anchor-right.anchor-right:before, .hover-bubble.anchor-left.anchor-right:before {
    border-left-color: #808080;
    right: -19px;
}
.hover-bubble.anchor-right.anchor-right:after, .hover-bubble.anchor-left.anchor-right:after {
    border-left-color: #FFFFFF;
    right: -18px;
}
.hover-bubble.anchor-right.anchor-left:before, .hover-bubble.anchor-left.anchor-left:before {
    border-right-color: #808080;
    left: -19px;
}
.hover-bubble.anchor-right.anchor-left:after, .hover-bubble.anchor-left.anchor-left:after {
    border-right-color: #FFFFFF;
    left: -18px;
}
.help-bubble {
    width: 35em;
}
.help-bubble p, .help-bubble form {
    margin: 0.5em;
}
.help-bubble a:hover {
    text-decoration: underline;
}
.hover-bubble.multi-selector {
    -moz-user-select: none;
    margin-top: -47px;
    min-height: 40px;
    min-width: 130px;
    padding: 8px 0;
}
.hover-bubble.multi-selector:before, .hover-bubble.multi-selector:after {
    top: 48px;
}
.hover-bubble.multi-selector strong, .hover-bubble.multi-selector a.sr {
    display: block;
    margin: 3px 0;
    text-align: center;
}
.hover-bubble.multi-selector strong {
    color: #333333;
    font-size: 1.05em;
    font-weight: bold;
}
.hover-bubble.multi-selector .throbber {
    position: absolute;
    right: 8px;
    top: 10px;
}
.hover-bubble.multi-selector .multi-list {
    margin-top: 5px;
}
.hover-bubble.multi-selector label {
    display: block;
    font-size: 1.25em;
    padding: 5px 12px;
}
.hover-bubble.multi-selector label:hover {
    background: none repeat scroll 0 0 #EEEEEE;
}
.hover-bubble.multi-selector label input[type="checkbox"] {
    margin-right: 5px;
    margin-top: 0;
    vertical-align: middle;
}
.hover-bubble.multi-selector label a {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #6699CC;
    border-radius: 2px;
    float: right;
    height: 12px;
    line-height: 12px;
    margin-left: 7px;
    opacity: 0.65;
    text-align: center;
    width: 12px;
}
.hover-bubble.multi-selector label a:hover {
    opacity: 1;
}
.hover-bubble.multi-selector .create-multi input[type="text"] {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    padding: 2px 5px;
}
.infotext {
    background-color: #EFF7FF;
    border: 1px solid #336699;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset, 0 1px 0 rgba(255, 255, 255, 0.6);
}
.infotext p {
    font-size: small;
    margin: 5px;
}
.wikiaction-revisions:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -774px;
    background-repeat: no-repeat;
}
.wikiaction-pages:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -730px;
    background-repeat: no-repeat;
}
.organic-listing {
    border: 1px solid #808080;
    margin-bottom: 7px;
    overflow: hidden;
    padding: 0;
    position: relative;
}
.organic-listing.loading {
    display: none;
}
.organic-listing .link {
    background-color: #F8F8F8;
    min-height: 72px;
    padding-bottom: 5px;
    padding-top: 5px;
}
.organic-listing.compressed .link {
    min-height: 37px;
    padding-bottom: 7px;
    padding-top: 7px;
}
.organic-listing.show-placeholder.loading {
    display: block;
    height: 82px;
    opacity: 0.5;
}
.organic-listing.show-placeholder.loading.compressed {
    height: 51px;
}
.organic-listing.show-placeholder.loading .help, .organic-listing.show-placeholder.loading .throbber {
    display: none;
}
.organic-listing .link, .organic-listing .link.compressed, .organic-listing .link.promotedlink {
    margin-bottom: 0;
    padding-left: 2px;
    padding-right: 7em;
}
.organic-listing .nextprev {
    margin: 0;
    position: absolute;
    right: 0;
    top: 0;
    vertical-align: top;
    z-index: 1;
}
.organic-listing .nextprev .arrow, .organic-listing .nextprev .throbber {
    height: 21px;
    margin: 5px 5px 2px 0;
    width: 21px;
}
.organic-listing .nextprev .throbber {
    background-position: center center;
    vertical-align: top;
}
.organic-listing .nextprev .arrow {
    border: 1px solid #B3B3B3;
    display: inline-block;
    position: relative;
    text-indent: 50px;
}
.organic-listing .nextprev .arrow.prev {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -83px -613px;
    background-repeat: no-repeat;
}
.organic-listing .nextprev .arrow.next {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -58px -613px;
    background-repeat: no-repeat;
}
.organic-listing .nextprev .arrow:hover {
    border: 1px solid #336699;
    cursor: pointer;
}
.organic-listing .nextprev .arrow:active {
    top: 1px;
}
.organic-listing .help {
    bottom: 0;
    color: #336699;
    margin: 0 5px 5px 0;
    position: absolute;
    right: -1px;
    z-index: 1;
}
.link.promotedlink {
    border: 1px solid #808080;
    overflow: hidden;
    padding: 5px 0 5px 3px;
    position: relative;
}
.link.promotedlink.unpaid {
    background-color: #FFFFCC;
}
.link.promotedlink.unseen {
    background-color: #FFFFCC;
}
.link.promotedlink.accepted {
    background-color: #99FF99;
}
.link.promotedlink.rejected {
    background-color: #FF9A9A;
}
.link.promotedlink.accepted {
    background-color: #99FF99;
}
.link.promotedlink.pending {
    background-color: #BBFFCC;
}
.link.promotedlink.promoted {
    background-color: #EFF7FF;
}
.link.promotedlink.finished {
    background-color: #DDDDDD;
}
#promo-form + form #img-preview-container {
    display: none;
}
.rejection-form textarea {
    height: 10em;
    width: 40em;
}
.promoted-list {
    font-size: larger;
}
.promoted-list .unpromote-button {
    display: inline;
}
.promoted-list .unpromote-button a {
    color: #808080;
}
.help-cover.promoted {
    background-color: #EFF7FF;
}
.organic-listing .promoted {
    background-color: #EFF7FF;
    border: medium none;
}
.organic-listing .sponsored-tagline {
    right: 6.8em;
}
.sponsored-tagline {
    bottom: 0;
    color: #808080;
    font-weight: bold;
    margin: 0 5px 5px 0;
    position: absolute;
    right: 0;
}
.promote-pixel {
    position: absolute;
    right: -1000px;
    top: -1000px;
}
.organic-help-button {
    padding: 0 0.5ex;
}
.menuarea {
    border-bottom: 1px dotted #808080;
    font-size: larger;
    margin: 5px;
    overflow: hidden;
    padding: 5px 10px;
}
.menuarea .spacer {
    display: inline;
    margin-right: 15px;
}
.panestack-title {
    border-bottom: 1px dotted #808080;
    margin: 10px 310px 0 10px;
    padding-bottom: 3px;
}
.panestack-title .title {
    font-size: 16px;
    font-weight: normal;
    margin: 10px 0;
}
.panestack-title a.title-button {
    font-size: 12px;
    margin-left: 8px;
}
.panestack-title a.title-button.gold {
    background-color: #FFF088;
    border: 1px solid #9A7D2E;
    border-radius: 3px;
    color: #6A4D00;
    padding: 1px 5px;
}
.commentarea h1 {
    border-bottom: 1px dotted #808080;
    margin: 10px 310px 0 10px;
    padding-bottom: 3px;
}
.commentarea .menuarea {
    border: medium none;
    color: #808080;
    margin: 0 310px 10px 10px;
    padding: 0;
}
.commentarea .menuarea form.toggle {
    margin-left: 8px;
}
.commentarea .menuarea .toggle {
    display: inline-block;
}
.commentarea .menuarea .toggle a {
    color: #808080;
    font-size: x-small;
    font-weight: bold;
}
.commentarea > .usertext {
    margin: 0 0 10px 10px;
    overflow: auto;
}
.infobar {
    background-color: #F6E69F;
    border: 1px solid #FFA500;
    font-size: small;
    margin: 5px 305px 5px 0;
    padding: 5px 10px;
}
.infobar img {
    display: inline;
    vertical-align: middle;
}
.infobar.red {
    background-color: #FFAEAE;
    border-color: #FF0000;
    padding: 5px;
}
.infobar.red img {
    float: left;
    margin-right: 5px;
}
.infobar.mellow {
    background-color: #EFF8FF;
    border: 1px solid #93ABC2;
}
.infobar.gold {
    background-color: #FFFDCC;
    border: 1px solid #E1B000;
    color: #9A7D2E;
}
.content .infobar.gold:before {
    margin-right: 7px;
    margin-top: 5px;
}
.infobar.welcome {
    background: url("../welcome-lines.png") repeat scroll center top rgba(0, 0, 0, 0);
    border: 1px solid #FF8B60;
    display: none;
    height: 80px;
    margin-right: 0;
    overflow: hidden;
    padding: 0;
    white-space: nowrap;
}
.infobar.welcome h1, .infobar.welcome h2 {
    display: inline-block;
    font-weight: normal;
    margin: 0;
}
.infobar.welcome h1 {
    background: none repeat scroll 0 0 #FFFFFF;
    border-bottom: 2px solid #5F99CF;
    font-size: 16px;
    margin-left: 2%;
    margin-top: 14px;
    padding: 7px 16px;
}
.infobar.welcome .button-row {
    margin-left: 10%;
    position: relative;
    top: -8px;
}
.infobar.welcome h2 {
    background: url("../welcome-upvote.png") no-repeat scroll 12px center #FFFFFF;
    border-bottom: 2px solid #FF4500;
    color: #222222;
    font-size: 13px;
    padding: 4px 14px 4px 38px;
}
.infobar.welcome a {
    background: none repeat scroll 0 0 #E75018;
    border-bottom: 2px solid #A73A11;
    border-radius: 4px;
    color: #FFFFFF;
    font-size: 11px;
    font-weight: bold;
    margin-left: 2%;
    padding: 5px 10px;
}
.infobar.welcome a:hover {
    background: none repeat scroll 0 0 #F0571E;
    border-bottom-color: #C74514;
}
.infobar.welcome a:active {
    background: none repeat scroll 0 0 #DF531F;
    border-bottom: 1px solid #A73A11;
    position: relative;
    top: 1px;
}
.md {
    font-size: small;
    max-width: 60em;
    overflow: auto;
}
.md p, .md h1 {
    margin: 5px 0;
}
.md h1 {
    font-size: 100%;
    font-weight: normal;
}
.md > * {
    margin-bottom: 0;
}
.md strong {
    font-weight: bold;
}
.md em {
    font-style: italic;
}
.md strong em {
    font-style: italic;
    font-weight: bold;
}
.md img {
    display: none;
}
.md ol, .md ul {
    margin: 10px 2em;
}
.md ul {
    list-style: disc outside none;
}
.md ol {
    list-style: decimal outside none;
    margin-left: 3em;
}
.md pre {
    margin: 10px;
}
.md blockquote, .help blockquote {
    border-left: 2px solid #336699;
    margin: 5px 15px 5px 5px;
    padding-left: 4px;
}
.md td, .md th {
    border: 1px solid #EEEEEE;
    padding: 1px 3px;
}
.md th {
    font-weight: bold;
}
.md table {
    margin: 5px 10px;
}
.md center {
    text-align: left;
}
a.star {
    color: #FF8B60;
    text-decoration: none;
}
.entry .buttons li {
    border: medium none;
    display: inline-block;
    line-height: 1.6em;
    padding-right: 4px;
}
.entry .buttons li + li {
    padding-left: 4px;
}
.entry .buttons li.stamp + li.stamp {
    margin-left: 4px;
}
.entry .buttons li a {
    color: #888888;
    font-weight: bold;
    padding: 0 1px;
}
.entry .buttons li a.nonbutton {
    color: #336699;
    font-weight: normal;
}
.entry .buttons a:hover {
    text-decoration: underline;
}
.entry .buttons .status-msg {
    display: none;
    margin-right: 0.5em;
}
.toggle .error {
    font-size: x-small;
}
.toggle .option {
    display: none;
}
.toggle .option.active {
    display: inline;
}
.thing .stub {
    display: none;
}
.link.last-clicked {
    border: 1px dashed #808080;
    overflow: hidden;
}
.link {
    margin: 0 0 8px;
    padding-left: 3px;
}
.link .score {
    color: #C6C6C6;
    text-align: center;
}
.link .title {
    font-size: medium;
    font-weight: normal;
    margin-bottom: 1px;
}
.link .child h3 {
    font-size: medium;
    margin: 15px;
    text-transform: none;
}
.rank {
    overflow: hidden;
}
.profile-page .link .rank, .single-page .link .rank {
    display: none;
}
.link .midcol {
    font-size: small;
    font-weight: bold;
}
.link .score.likes {
    color: #FF8B60;
}
.link .score.dislikes {
    color: #9494FF;
}
.link .rank {
    color: #C6C6C6;
    float: left;
    font-family: arial;
    font-size: medium;
    margin-top: 15px;
    text-align: right;
}
.link.compressed {
    margin-bottom: 5px;
}
.link.compressed .rank {
    margin-top: 10px;
}
.link.compressed .title {
    margin: -2px 0 3px;
}
.link.compressed .score {
    color: #888888;
}
.link.compressed .score-placeholder {
    height: 3px;
}
.link.compressed .subreddit {
    font-weight: bold;
}
.link.compressed .tagline {
    display: inline;
    margin-right: 12px;
}
.link.compressed .expando-button {
    display: none;
}
.score.likes, .score.dislikes {
    display: none;
}
.likes .score, .dislikes .score {
    display: none;
}
.likes .score.likes {
    display: inline;
}
.dislikes .score.dislikes {
    display: inline;
}
.likes div.score.likes {
    display: block;
}
.dislikes div.score.dislikes {
    display: block;
}
.warm-entry .rank {
    color: #EDA179;
}
.hot-entry .rank {
    color: #E47234;
}
.cool-entry .rank {
    color: #A5ABFB;
}
.cold-entry .rank {
    color: #4959F7;
}
.gadget {
    font-size: x-small;
}
.gadget .midcol {
    margin: 0;
    width: 15px;
}
.gadget .reddit-link-end {
    clear: left;
    padding-top: 10px;
}
.gadget .click-gadget {
    font-size: small;
}
.gadget small {
    color: #808080;
}
.gadget .reddit-entry {
    margin-left: 20px;
}
.gadget .right {
    text-align: right;
}
.comment, .content .details {
    margin-left: 10px;
}
.comment .edit-body {
    display: none;
    visibility: hidden;
}
.comment .midcol {
    margin-left: 0;
}
.comment .title {
    font-size: small;
    margin-top: 10px;
}
.comment .midcol {
    width: 15px;
}
.comment .author {
    font-weight: bold;
}
.comment .collapsed {
    color: #808080;
    font-size: x-small;
    font-style: italic;
    padding-bottom: 10px;
    padding-left: 15px;
}
.comment .collapsed a {
    color: #808080;
}
.comment .expand {
    font-style: normal;
    margin-left: 0;
    margin-right: 3px;
    padding: 1px;
}
.comment .expand:hover {
    background-color: #336699;
    color: #FFFFFF;
    text-decoration: none;
}
.comment .score {
    font-size: x-small;
}
.comment .child, .comment .showreplies {
    border-left: 1px dotted #DDDDFF;
    margin-left: 15px;
    margin-top: 10px;
}
.comment .showreplies {
    display: block;
    margin-bottom: 15px;
    margin-top: 7px;
    padding: 5px;
}
textarea.gray {
    color: #808080;
}
.deepthread:after {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -50px -817px;
    background-repeat: no-repeat;
    content: " ";
    display: inline-block;
    height: 9px;
    margin: 5px 0 0 5px;
    width: 25px;
}
.deepthread a {
    color: #336699;
    font-size: larger;
}
.deepthread a:hover {
    text-decoration: underline;
}
.morecomments {
    font-size: larger;
}
.morecomments a {
    color: #336699;
}
.morecomments a:hover {
    text-decoration: underline;
}
.morecomments .gray {
    color: #808080;
    font-weight: normal;
}
.expand-btn {
    display: inline-block;
    font-size: smaller;
    margin: 4px 5px 0;
}
.message {
    margin: 10px 10px 20px 5px;
    padding: 7px;
}
.message.focal > .entry .md {
    background-color: #FFFFCC;
}
.message .collapsed .head {
    color: #888888;
    font-style: italic;
}
.message.message-parent .tagline, .message.message-reply .tagline {
    color: #448855;
}
.message.message-parent > .entry .noncollapsed, .message.message-reply > .entry .noncollapsed {
    color: #448855;
}
.message.recipient > .entry .noncollapsed {
    color: #000000;
}
.message.message-reply.recipient > .entry .head, .message.message-parent.recipient > .entry .head {
    color: #000000;
    font-weight: bold;
}
.message.new > .entry .head {
    color: #FF4500;
    font-weight: bold;
}
.message.new > .entry {
    background-color: #F7F7F7;
    border: 1px solid #E9E9E9;
    padding: 6px;
}
.message.new .unread {
    display: none;
}
.message .child .message, .message .child .usertext {
    margin-left: 12px;
    margin-top: 10px;
}
.message.was-comment .child .message, .message.was-comment .child .usertext {
    margin-left: 0;
    margin-top: 0;
}
.message .expand {
    display: none;
}
.message .entry {
    margin-left: 0;
}
.message.message-parent .expand {
    display: inline;
}
.message.message-parent .child, .message.message-reply .child {
    margin: 0;
    padding: 0;
}
.message.message-parent .child .message, .message.message-reply .child .message {
    margin: 0;
    padding: 0;
}
.message.message-parent .subject {
    margin-bottom: 10px;
}
.message.message-parent .message .subject {
    display: none;
}
.message.message-reply .subject {
    display: none;
}
.message.message-reply .entry, .message.message-parent .entry {
    border-left: 2px dashed #E7E7E7;
    margin-left: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
}
.message .buttons, .message .md {
    margin-left: 15px;
}
.message .entry .parent {
    border: 1px solid #336699;
    margin: 3px 10px;
    max-width: 60em;
}
.message .subject .correspondent {
    background-color: #EFF7FF;
    border: 1px solid #336699;
    color: #336699;
    display: inline-block;
    margin-right: 10px;
    padding: 2px 5px;
}
.message .subject .title {
    font-style: italic;
    font-weight: normal;
    margin-left: 10px;
}
.message .parent-link {
    font-weight: bold;
    margin-left: 12px;
    padding: 0 2px;
}
.message.was-comment .midcol {
    margin-left: 0;
}
.message.was-comment .buttons, .message.was-comment .parent-link {
    margin-left: 0;
}
.message.was-comment .md {
    margin-left: 2px;
}
.message .subject {
    font-size: larger;
    font-weight: bold;
}
.message.gold {
    background: url("../gold/tikkit-bg.png") repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 1px solid #555555;
    border-radius: 4px;
    font-family: "Bitstream Charter","Hoefler Text","Palatino Linotype","Book Antiqua",Palatino,georgia,garamond,FreeSerif,serif;
    max-width: 80em;
    padding: 20px;
    text-align: center;
}
.message.gold .insignia {
    float: left;
    margin: 6em 20px 0;
}
.message.gold .subject {
    font-size: 2.6em;
    line-height: 1.5em;
    text-shadow: -1px -1px 0 rgba(255, 255, 255, 0.8);
}
.message.gold .tagline, .message.gold .correspondent, .message.gold .expand-btn, .message.gold .unread-button, .message.gold .block-button, .message.gold .report-button, .message.gold ul.buttons li.first {
    display: none;
}
.message.gold .entry {
    border: 0 none;
    margin: 0;
}
.message.gold .md {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #000000;
    border-image: none;
    border-style: dashed;
    border-width: 1px 0;
    margin: 0 0 10px;
    max-width: 100%;
    padding: 15px;
    text-shadow: 0 0 2px #FFFFFF;
}
.message.gold .md blockquote {
    border: 0 none;
    font-size: 0.7em;
    font-style: italic;
}
.message.gold .md p {
    font-size: 1.2em;
    line-height: 1.4em;
}
.message.gold .usertext-edit {
    margin: 0 auto;
}
.message.gold .usertext-buttons {
    text-align: left;
}
.message.gold ul.buttons li a {
    color: #7A5D0E;
    font-size: 2em;
    text-shadow: 0 0 3px #FFFFFF;
}
.message.gold ul.buttons, .message.gold ul.buttons li {
    margin: 0;
    padding: 0;
}
.message.gold.new > .entry {
    background-color: rgba(0, 0, 0, 0);
    border: 0 none;
    padding: 0;
}
.message.gold-auto blockquote {
    background-color: #FAFAFA;
    border: 0 none;
    color: #808080;
    font-size: 0.8em;
    font-style: italic;
    margin-left: 0;
    margin-top: 1em;
    padding: 4px;
}
.message.gold-auto blockquote p {
    margin: 2px;
}
.message.gold-auto blockquote strong {
    font-style: inherit;
}
.clippy img {
    float: left;
}
.clippy-bubble {
    background-color: #FFFDD7;
    border: 1px solid #000000;
    border-radius: 5px;
    float: left;
    margin-bottom: 15px;
    margin-left: 5px;
    padding: 7px;
    width: 350px;
}
.clippy-headline {
    font-weight: bold;
    margin-bottom: 0.5em;
}
.clippy-bubble ul {
    list-style-image: url("../clippy-bullet.png");
    list-style-type: disc;
    padding-left: 15px;
}
.clippy-bubble li {
    margin-top: 0.5em;
}
.subreddit {
    margin-bottom: 10px;
}
.subreddit p {
    margin-bottom: 1px;
    margin-top: 0;
}
.subreddit .description {
    font-size: small;
    max-width: 60em;
}
.subreddit .key {
    display: block;
}
.subreddit .title {
    font-size: medium;
    margin-right: 5px;
}
.subreddit .midcol {
    margin-right: 5px;
    margin-top: 5px;
    text-align: right;
    width: 12em !important;
}
.fancy-toggle-button {
    display: block;
    margin-bottom: 5px;
}
.fancy-toggle-button .active {
    background: none repeat-x scroll left center #FFFFFF;
    border: 1px solid #444444;
    border-radius: 3px;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: bold;
    line-height: 20px;
    padding: 1px 6px;
}
.fancy-toggle-button .remove {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -182px;
    background-repeat: repeat;
}
.fancy-toggle-button .add {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 0;
    background-repeat: repeat;
}
.fancy-toggle-button .banned {
    background-color: #666666;
    padding: 1px 1.9em;
}
.commentbody.border {
    background-color: #FFFFCC;
    padding-left: 5px;
}
.commentbody.grayed {
    background-color: #E0E0E0;
    color: #808080;
    padding-left: 5px;
}
.fixedwidth {
    float: left;
    height: 0;
    width: 100px;
}
.clearleft {
    clear: left;
    height: 0;
}
.clear {
    clear: both;
}
.sharetable.preftable {
    margin-left: 20px;
}
.sharetable.preftable th {
    padding-bottom: 5px;
    padding-top: 5px;
}
.sharetable.preftable button {
    margin-top: 10px;
}
.preftable.widget-preview {
    font-size: smaller;
}
.preftable.widget-preview input[type="text"] {
    width: 150px;
}
.preftable #css-options input[type="text"] {
    margin-left: 0;
    width: 6em;
}
.share-summary {
    margin-top: 10px;
    width: 95%;
}
.share-summary .head td {
    font-size: large;
    text-align: center;
    width: 50%;
}
.share-summary td {
    vertical-align: top;
}
.share-summary > tbody > tr > td {
    padding-bottom: 10px;
    padding-left: 10px;
}
.share-summary th {
    border-bottom: 1px solid #000000;
    padding: 5px;
}
.sponsored .entry {
    margin-right: 20px;
}
.sponsored .titlerow {
    background: none repeat scroll 0 0 #FCFCFC;
    border-color: #BCBCBC #E0E0E0 #E0E0E0 #BCBCBC;
    border-style: solid;
    border-width: 1px;
    padding: 10px;
}
.footer-parent {
    clear: both;
    font-size: larger;
    padding-top: 40px;
    text-align: center;
}
.footer {
    border: 1px solid #F0F0F0;
    color: #808080;
    display: inline-block;
    margin: 15px;
    padding: 5px;
}
.footer .col {
    border-left: 1px solid #E0E0E0;
    float: left;
    height: 9.5em;
    margin: 10px 0;
    padding: 0 15px;
}
.footer .col:first-child {
    border: medium none;
}
.notes-button {
    margin-top: 3px;
}
.notes-status {
    font-size: larger;
}
.load0 {
    background-color: #FFFFFF;
}
.load1 {
    background-color: #F0F5FF;
}
.load2 {
    background-color: #E2ECFF;
}
.load3 {
    background-color: #D6F5CB;
}
.load4 {
    background-color: #CAFF98;
}
.load5 {
    background-color: #E4F484;
}
.load6 {
    background-color: #FFEA71;
}
.load7 {
    background-color: #FFDB81;
}
.load8 {
    background-color: #FF9191;
}
.load9 {
    background-color: #FF0000;
    color: #FFFFFF;
}
.orangered {
    color: #FF4500;
}
.logout {
    display: inline;
}
.login-form-side {
    border: 1px solid #808080;
}
.login-form-side input[type="text"], .login-form-side input[type="password"] {
    border: 1px solid #999999;
    height: 17px;
    margin: 5px 0 0 5px;
    padding: 1px;
    top: 5px;
    width: 137px;
}
.login-form-side input[type="password"] {
    width: 138px;
}
.login-form-side #remember-me, .login-form-side .submit {
    margin: 4px;
}
.login-form-side .submit input[type="button"] {
    margin: 1px;
}
.login-form-side #remember-me {
    float: left;
    line-height: 24px;
}
.login-form-side #remember-me * {
    vertical-align: middle;
}
#rem-login-main {
    border: medium none;
    height: auto;
    margin-right: 5px;
    margin-top: 0;
    position: static;
    width: auto;
}
.login-form-side label {
    margin-right: 5px;
    padding: 2px 0;
    white-space: nowrap;
}
.login-form-side .recover-password {
    margin-left: 1em;
}
.login-form-side .status {
    display: none;
}
.login-form-side .submit {
    float: right;
}
.login-form-side .submit *, .user-form .submit * {
    vertical-align: middle;
}
.throbber {
    background: url("../throbber.gif") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    display: none;
    height: 18px;
    margin: 0 2px;
    width: 18px;
}
.working .throbber {
    display: inline-block;
}
.status {
    font-size: small;
    margin: 5px 0 0 5px;
}
.error {
    color: #FF0000;
    font-size: small;
}
.red {
    color: #FF0000;
}
.buygold {
    color: #9A7D2E;
    font-weight: bold;
}
.line-through {
    text-decoration: line-through;
}
#noresults {
    margin-right: 310px;
}
#ad-frame, #ad_main {
    border: 0 none;
    height: 280px;
    overflow: hidden;
    width: 300px;
}
#ad_sponsorship {
    border: 0 none;
    height: 100px;
    overflow: hidden;
    width: 300px;
}
#searchmenu {
    background-color: #F5F5F5;
    border-bottom: 2px solid #336699;
    margin: 10px 0 0;
    padding: 2px 0 0;
}
#searchmenu .searchlabel {
    background-color: #FFFFFF;
    color: #336699;
    font-weight: bold;
    padding: 2px 15px 0 0;
}
#searchmenu .searchtime {
    display: inline;
    font-weight: bold;
    width: 305px;
}
#searchexpando {
    border-radius: 3px;
    display: none;
    margin: 5px 0 0;
}
#searchexpando input, #searchexpando p {
    margin-bottom: 10px;
}
#searchexpando {
    padding-top: 10px;
}
#searchexpando dl {
    margin: 10px 0;
}
#searchexpando dt {
    margin: 0;
}
#previoussearch p {
    margin: 5px 0;
}
#moresearchinfo {
    border: 0 solid #FFA500;
    display: none;
    margin-top: -5px;
    max-width: 300px;
    padding-top: 5px;
}
label + #moresearchinfo {
    border-width: 1px 0 0;
    margin-top: 0;
}
#previoussearch #moresearchinfo {
    border-color: #808080;
    margin: 5px 0;
}
#search_hidemore {
    float: right;
    margin-left: 5px;
}
.searchparams {
    margin: 5px 20px;
}
.searchparams .labels {
    margin-left: 10px;
    text-align: right;
}
.searchpane {
    background: url("../search-large.png") no-repeat scroll 26px center #E0E0E0;
    margin: 5px 305px 5px 0;
    padding-left: 96px;
}
.search-summary {
    float: right;
    margin: 6px 8px 0 0;
    text-align: right;
}
.search-summary .result-count {
    font-weight: bold;
}
.searchfail {
    color: #C00000;
    font-size: larger;
    line-height: 2em;
}
.searchfail a {
    color: #FF0000;
    text-decoration: underline;
}
.searchfacets {
    background: none repeat scroll 0 0 #FEFEFE;
    border: 1px solid #808080;
    box-shadow: 0 4px 6px -1px #CCCCCC inset;
    font-size: small;
    margin-top: -6px;
    overflow: auto;
    padding: 10px;
    white-space: pre-wrap;
}
.searchfacets .title {
    margin: 5px;
}
.searchfacets .facet:hover {
    text-decoration: underline;
}
.searchfacets .list {
    margin: 0 0 0 10px;
}
li.searchfacet {
    display: inline-block;
    width: 15em;
}
.facet.count {
    color: #888888;
    font-weight: bold;
}
#search input[type="submit"] {
    padding: 1px 10px;
}
.legal {
    color: #808080;
    font-family: serif;
    font-size: small;
    margin-top: 20px;
}
.legal a {
    text-decoration: underline;
}
.divide {
    border-right: 2px solid #D3D3D3;
    margin-right: -2px;
}
.login-form-section {
    float: left;
    overflow: hidden;
    padding-left: 2%;
    padding-right: 2%;
    position: relative;
}
.login-form-section.register {
    width: 56%;
}
.login-form-section.login {
    width: 36%;
}
.login-form-section > h3 {
    color: #404040;
    font-size: large;
    font-variant: small-caps;
    font-weight: bold;
    margin-bottom: 0;
    margin-top: 10px;
}
.login-form-section p {
    color: #606060;
    margin-bottom: 20px;
    text-align: left;
}
.login-form-section.register .registration-info {
    color: #777777;
    left: 53%;
    margin-top: 1.25em;
    min-width: 20em;
    position: absolute;
    width: 40%;
}
.login-form-section.register .registration-info .md {
    font-size: 1.1em;
}
.login-form-section.register .registration-info .md li {
    list-style-type: disc;
    margin-bottom: 0.5em;
}
.user-form label {
    color: #606060;
    display: block;
    font-weight: bold;
}
.user-form label.note {
    font-weight: normal;
}
.user-form .error {
    display: block;
}
.user-form .remember {
    display: inline;
    margin-left: 2px;
    text-transform: lowercase;
}
.user-form input[type="checkbox"] {
    vertical-align: bottom;
}
.user-form ul {
    margin: 7px;
}
.user-form li {
    margin-top: 5px;
}
.user-form p .btn {
    margin-top: 5px;
}
.user-form input.logtxt {
    width: 125px;
}
.user-form input[type="text"], .user-form input[type="password"], .user-form input[type="email"] {
    border: 1px solid #A0A0A0;
    margin-bottom: 2px;
    margin-top: 2px;
    padding: 1px;
    width: 125px;
}
.user-form #captcha {
    width: 250px;
}
.user-form .submit {
    margin-top: 10px;
}
#passform h1 {
    margin-bottom: 0;
}
#passform p {
    font-size: small;
    margin-bottom: 5px;
}
.register-form .name-entry * {
    vertical-align: middle;
}
.notice-taken, .notice-available {
    display: none;
    line-height: 16px;
}
.register-form.name-taken .notice-taken, .register-form.name-available .notice-available {
    display: block;
    margin-top: 2px;
}
.register-form .name-entry .throbber {
    display: none;
    margin-left: 5px;
}
.register-form.name-checking .notice-taken, .register-form.name-checking .notice-available {
    opacity: 0.5;
}
.register-form.name-checking .name-entry .throbber {
    display: inline-block;
}
.cover {
    background-color: #808080;
    height: 100%;
    left: 0;
    opacity: 0.7;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}
.popup {
    background-color: #FFFFFF;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    left: 10%;
    margin-top: 40px;
    padding: 10px;
    position: absolute;
    text-align: left;
    top: 0;
    width: 80%;
    z-index: 1001;
}
.popup h1 {
    font-size: large;
    font-weight: normal;
    margin-left: 1em;
}
.popup h2 {
    color: #000000;
    font-size: small;
    font-weight: normal;
    margin-top: 0;
    text-align: center;
}
.popup .hidecover {
    float: right;
    margin-right: 3px;
}
.usertable {
    margin-left: 10px;
}
.usertable {
    font-size: larger;
}
.usertable td, .usertable th {
    padding: 0 0.7em;
}
.usertable {
    white-space: nowrap;
}
.usertable .moderator.toggle {
    background: none repeat scroll 0 0 #FDFFE8;
    border: 1px solid #BBBBBB;
    border-radius: 2px;
    display: inline-block;
    margin: 1em 0 0.5em;
    padding: 11px 15px;
}
.usertable .moderator.toggle .option.main:before {
    margin-right: 7px;
}
.usertable .moderator.toggle .option {
    display: inline;
}
.usertable .moderator.toggle .togglebutton, .usertable .moderator.toggle .error {
    border-left: 1px solid #BBBBBB;
    display: none;
    font-size: inherit;
    margin-left: 10px;
    padding: 4px 0 4px 15px;
}
.usertable .moderator.toggle .active .togglebutton {
    display: inline;
}
.usertable .moderator.toggle .error.active {
    display: inline;
}
.usertable tr:hover {
    background-color: #E5EFFF;
}
body.rulespage-body {
    overflow-y: scroll;
}
.rulespage {
    margin: 0 auto;
    position: relative;
    vertical-align: middle;
    width: 600px;
}
.rulespage h1 {
    font-size: xx-large;
    margin-top: 20px;
    text-align: center;
}
.rulespage .info {
    font-size: larger;
    padding-top: 10px;
}
.rulespage .rule-list {
    font-size: medium;
    margin: 10px;
    padding: 10px;
}
.rulespage li {
    background-clip: padding-box;
    border-bottom: 1px solid #DDDDDD;
    margin: 10px;
    padding: 10px;
}
.rulespage li.first-rule {
    border-top: 1px solid #DDDDDD;
    padding-top: 18px;
}
.rulespage li#minors {
    padding-bottom: 18px;
}
.rulespage .expander {
    color: #808080;
    cursor: help;
    padding: 10px;
}
.rulespage .examples {
    font-size: small;
}
.rulespage li.example {
    border: medium none;
}
.rulespage li.good-example {
    background: none repeat scroll 0 0 #BCF5A9;
}
.rulespage li.bad-example {
    background: none repeat scroll 0 0 #F5A9A9;
}
.rulespage em {
    font-weight: bold;
}
.rulespage em.toggle {
    font-weight: normal;
}
.rulespage .info {
    text-align: center;
}
.rulespage img.bottom {
    margin-top: 30px;
    text-align: center;
}
.aboutpage {
    margin-right: 320px;
}
.aboutpage p {
    margin: 5px;
}
.aboutpage h1, .aboutpage h2 {
    margin: 10px;
}
.aboutpage .usertable {
    width: 45%;
}
.little a {
    font-size: x-small;
}
.oldbylink a {
    background-color: #F0F0F0;
    color: #808080;
    margin: 2px;
}
.error-log {
    clear: both;
}
.error-log a:hover {
    text-decoration: underline;
}
.error-log .rest {
    display: none;
}
.error-log:first-child .rest {
    display: block;
}
.error-log, .error-log .exception {
    border: 1px solid #AAAAAA;
    margin-bottom: 10px;
    padding: 3px 5px;
}
.error-log .exception {
    background-color: #F0F0F8;
}
.error-log .exception.new {
    border: 2px dashed #FF6600;
}
.error-log .exception.severe {
    background-color: #FFDFDF;
    border: 2px solid #FF0000;
}
.error-log .exception.interesting {
    background-color: #E0E0E8;
    border: 2px dotted #000000;
}
.error-log .exception.fixed {
    background-color: #E8F6E8;
    border: 1px solid #008800;
}
.error-log .exception span {
    font-weight: bold;
    margin-right: 5px;
}
.error-log .exception span.normal {
    display: none;
    margin-right: 0;
}
.error-log .exception span.new, .error-log .edit-area label.new {
    color: #FF6600;
}
.error-log .exception span.severe, .error-log .edit-area label.severe {
    color: #FF0000;
}
.error-log .exception span.interesting, .error-log .edit-area label.interesting {
    font-style: italic;
    font-weight: normal;
}
.error-log .exception span.fixed, .error-log .edit-area label.fixed {
    color: #008800;
}
.error-log .exception-name {
    display: inline-block;
    margin-right: 5px;
    max-height: 50px;
    overflow: hidden;
}
.error-log .nickname {
    color: #000000;
    font-size: larger;
    font-weight: bold;
}
.error-log .exception.fixed .nickname {
    text-decoration: line-through;
}
.error-log a:focus {
}
.error-log .edit-area {
    background-color: #EEEEEE;
    border: 1px solid #000000;
}
.error-log .edit-area label {
    margin-right: 25px;
}
.error-log .edit-area input[type="radio"] {
    margin-right: 4px;
}
.error-log .edit-area input[type="text"] {
    width: 800px;
}
.error-log .edit-area table td, .error-log .edit-area table th {
    padding: 5px 0 0 5px;
}
.error-log .save-button {
    font-size: small;
    margin: 0 5px 5px 0;
    padding: 0;
}
.error-log .date {
    font-size: 150%;
    font-weight: bold;
}
.error-log .hexkey {
    color: #997700;
}
.error-log .exception-name {
    color: #000077;
    font-size: larger;
}
.error-log .frequency {
    color: #886666;
    float: right;
    font-size: larger;
}
.error-log .occurrences {
    border: 1px solid #003300;
    margin: 5px 0 2px;
    padding: 2px;
}
.error-log .occurrence {
    color: #003300;
    font-family: monospace;
    margin-right: 3em;
    white-space: nowrap;
}
.error-log table.stacktrace th, .error-log table.stacktrace td {
    border: 1px solid #AAAAAA;
}
.error-log table.stacktrace td {
    font-family: monospace;
}
.error-log table.stacktrace td.col-1 {
    padding-right: 10px;
    text-align: right;
}
.error-log .logtext.error {
    color: #000000;
    margin: 0 0 10px;
}
.error-log .logtext {
    background-color: #EEECE6;
    border: 2px solid #555555;
    font-size: small;
    margin-bottom: 10px;
    padding: 5px;
}
.error-log .logtext * {
    color: #000000;
}
.error-log .logtext.error .loglevel {
    background-color: #FF0000;
    color: #FFFFFF;
}
.error-log .logtext.warning .loglevel {
    background-color: #FF6600;
}
.error-log .logtext.info .loglevel {
    background-color: #00BBFF;
}
.error-log .logtext.debug .loglevel {
    background-color: #00EE00;
}
.error-log .logtext .loglevel {
    border: 1px solid #000000;
    margin-right: 5px;
    padding: 0 5px;
}
.error-log .logtext table {
    font-family: monospace;
    margin: 8px 5px 2px 0;
}
.error-log .logtext table, .error-log .logtext table th, .error-log .logtext table td {
    border: 1px solid #AAAAAA;
}
.error-log .logtext table th, .error-log .logtext table td {
    border: 1px solid #AAAAAA;
}
.error-log .logtext table .occ {
    text-align: right;
}
.error-log .logtext table .dotdotdot {
    padding: 0;
}
.error-log .logtext table .dotdotdot a {
    background-color: #E0E0E0;
    display: block;
    height: 100%;
    margin: 0;
    width: 100%;
}
.error-log .logtext table .dotdotdot a:hover {
    background-color: #BBBBBB;
    text-decoration: none;
}
.error-log .logtext .classification {
    font-size: larger;
    font-weight: bold;
}
.error-log .logtext .actual-text {
    max-width: 600px;
    overflow: hidden;
}
.details {
    font-size: x-small;
    margin-bottom: 10px;
}
.details span {
    margin: 0 5px;
}
.details th {
    font-weight: bold;
    padding-right: 5px;
    text-align: right;
}
.details td {
    vertical-align: top;
}
.ring {
    background-color: #FF0000;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
    padding-left: 3px;
    padding-right: 4px !important;
    text-align: center;
}
.vote-note {
    max-width: 150px;
    padding-left: 3px;
}
.vote-a-notes {
    color: #FF0000;
}
.vote-up {
    color: #FF4500;
}
.vote-down {
    color: #336699;
}
.vote-invalid {
    color: #888888 !important;
    font-style: italic;
}
.unvotable-message {
    border: 1px solid #FF6600;
    border-radius: 3px;
    display: none;
    margin-top: 4px;
    padding: 1px 3px;
}
.bottommenu {
    clear: both;
    color: #808080;
    font-size: smaller;
}
.bottommenu a {
    color: #808080;
    text-decoration: underline;
}
.bottommenu .updated {
    color: #008000;
}
.debuginfo {
    clear: both;
    color: #808080;
    font-size: smaller;
    padding: 5px;
    text-align: right;
}
.debuginfo .icon {
    color: #A0A0A0;
    font: 1.5em serif;
    padding: 0 2px;
}
.debuginfo .content {
    display: none;
}
.debuginfo:hover .content {
    display: inline;
}
.button {
    border-collapse: collapse;
    color: #336699;
    margin: 1px;
    text-align: center;
}
button.button[disabled] {
    color: #808080;
}
.button #cover {
    position: relative;
}
.button .cover {
    background: none repeat scroll 0 0 #FFFFFF;
}
.button #popup {
    background: none repeat scroll 0 0 #FFFFFF;
    border-color: #B2B2B2 #000000 #000000 #B2B2B2;
    border-style: solid;
    border-width: 1px;
    left: 0;
    margin: 0;
    padding: 1px;
    position: absolute;
    top: 0;
    width: 80%;
    z-index: 1001;
}
.button .arrow {
    width: 15px;
}
.num {
    font-size: larger;
    font-weight: bold;
}
.button.thing {
    margin: 0;
    padding: 0;
}
.button-body {
    background-color: rgba(0, 0, 0, 0);
}
.button .blog {
    background-color: #FFFFFF;
    border: 1px solid #C7DEF7;
    border-radius: 4px;
    color: #808080;
    margin: 0;
    text-align: center;
}
.button .blog .r {
    color: #808080;
}
.button .blog .score {
    white-space: nowrap;
}
.button a:hover {
    text-decoration: underline;
}
.button .blog1 {
    font-size: x-small;
}
.button .blog1 .arrow {
    float: left;
    margin-left: 2px;
    margin-right: 2px;
}
.button .blog1 .headimgcell {
    background-color: #C7DEF7;
    float: left;
    width: 18px;
}
.button .blog1 .headimgcell a {
    display: inline-block;
}
.button .blog1 .score {
    margin-right: 5px;
    margin-top: 2px;
}
.button .blog2 {
    font-size: small;
}
.button .blog2 .arrow {
    margin-left: auto;
    margin-right: auto;
    width: 15px;
}
.button .blog2 .bottomreddit {
    background-color: #C7DEF7;
    color: #000000;
    font-size: small;
}
.button .blog2 .score .submit {
    display: block;
    font-size: x-small;
    line-height: 17px;
}
.button .blog.blog3 {
    background-color: rgba(0, 0, 0, 0);
    border: medium none;
    font-size: small;
}
.button .blog3 .left {
    float: left;
    width: 50%;
}
.button .blog2 .arrow {
    margin-left: auto;
    margin-right: auto;
    width: 15px;
}
.button .blog3 .right {
    float: right;
    margin-top: 5px;
}
.button .blog3 .score .submit {
    display: block;
    font-size: x-small;
    line-height: 17px;
}
.button .blog3 .snoo {
    margin-top: -1px;
}
.blog5 .right {
    float: right;
}
.blog5 .left {
    display: block;
    float: left;
    margin-top: 10px;
}
.blog5 .clearleft {
    clear: left;
}
.button .blog.blog5 {
    border: medium none;
    font-size: small;
    text-align: left;
}
.blog5 a.bling {
    float: left;
}
.blog5 .container {
    height: 50px;
    margin-left: 35px;
    margin-top: 2px;
}
.blog5 ul {
    display: inline;
}
.blog5 ul a {
    color: #515481;
    font-weight: bold;
    text-decoration: underline;
}
.blog5 li {
    display: inline;
    padding: 1px 10px;
}
.blog5 li.selected {
    background-color: #F8F8F1;
    border-color: #CCCCCC;
    border-style: solid solid none;
    border-width: 1px;
    color: #000000;
}
.blog5 .votes {
    background-color: #F8F8F1;
    border: 1px solid #CCCCCC;
    height: 25px;
    padding-top: 5px;
}
.blog5 .arrow {
    background-position: left center;
    background-repeat: no-repeat;
    color: #000000;
    cursor: pointer;
    display: inline;
    margin-left: 5px;
    margin-right: 15px;
    padding-left: 20px;
}
.blog5 .votes.disabled .arrow {
    color: #888888;
}
.blog5 .arrow:hover {
    text-decoration: none;
}
.blog5 .arrow b {
    font-size: larger;
}
.blog5 .arrow.upmod b {
    color: #FF8B60;
}
.blog5 .arrow.downmod b {
    color: #9494FF;
}
.blog5 .right {
    font-size: medium;
    font-style: italic;
    margin-right: 5px;
}
.optional {
    color: #008000;
}
.instructions {
    font-size: larger;
}
.instructions h1, .instructions h2, .instructions h3 {
    margin-bottom: 20px;
    margin-top: 20px;
}
.instructions p {
    margin: 10px;
    max-width: 60em;
}
.instructions pre {
    margin: 5px 10px 5px 5px;
}
.instructions iframe {
    margin: 5px 10px 5px 0;
}
.instructions input, .instructions select {
    margin: 0 0.5em;
}
.instructions a:focus {
}
.instructions strong {
    font-weight: bold;
}
.instructions .buttons {
    margin-left: 1em;
    max-width: 50em;
}
.instructions .buttons li {
    border-bottom: 1px solid #E0E0E0;
    margin-top: 1em;
    padding-bottom: 1em;
}
.instructions code {
    background-color: #FFFF99;
    display: block;
    font-family: monospace;
    font-size: small;
    margin: 5px;
    max-width: 50em;
    padding: 10px;
}
.self-service.instructions {
    margin-bottom: 50px;
}
.self-service.instructions p {
    margin-left: 20px;
}
.self-service.instructions ul {
    list-style-type: circle;
    margin-left: 60px;
}
.self-service.instructions li + li {
    padding-top: 10px;
}
body.contact-us-page {
    overflow-y: scroll;
}
.contact-us-page .content {
    margin: 0 auto;
    width: 600px;
}
.contact-us-page h1 {
    font-size: xx-large;
    margin: 20px 0;
    text-align: center;
}
.contact-us-page .info {
    font-size: larger;
    margin-bottom: 20px;
    text-align: center;
}
.contact-us-page h2.button {
    background-color: #CEE2F5;
    border: 2px solid #336699;
    border-radius: 7px;
    color: #336699;
    font-size: x-large;
    font-weight: bold;
    line-height: 1.5em;
    margin: 0 10px 10px;
    text-align: center;
}
.contact-us-page h2.button:hover {
    background-color: #DAEAF8;
    cursor: pointer;
}
.contact-us-page .details {
    display: none;
    margin: 0;
}
.contact-us-page li:target .details {
    display: block;
}
.contact-us-page .details li {
    background-color: #FAFAFA;
    border: 1px solid #CCCCCC;
    font-size: small;
    margin: 0 40px 10px;
    padding: 10px;
    width: 500px;
}
.contact-us-page img.space-snoo {
    display: block;
    margin: 50px auto 0;
}
.button-demo a.view-code, .button-demo a.hide-code {
    float: right;
    margin-bottom: 1em;
}
.button-demo a.hide-code {
    display: none;
}
.instructions .button-demo code {
    display: none;
}
.button-demo.show-demo a.view-code {
    display: none;
}
.button-demo.show-demo a.hide-code {
    display: inline;
}
.button-demo.show-demo code {
    display: block;
}
#preview {
    float: right;
    margin: 10px;
    width: 30em;
}
#preview span {
    color: #D3D3D3;
}
#preview #previewbox {
    border-color: #D3D3D3;
    border-style: dashed;
    border-width: 0.2em;
    font-size: larger;
    padding: 1em;
}
.bookmarklet {
    border: 1px solid #888888;
    padding: 0 2px;
}
.toolbar {
    background-color: #CEE3F8;
    border-bottom: 1px solid #336699;
    font-size: small;
}
.toolbar .left-side {
    background-color: #EFF7FF;
    border-right: 1px solid #336699;
    float: left;
    height: 19px;
}
.toolbar .middle-side {
    background-color: #EFF7FF;
    cursor: pointer;
    text-align: center;
}
.toolbar .middle-side a, .toolbar .middle-side b {
    border-left: medium none;
    display: block;
}
.toolbar .middle-side input[type="text"] {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0, 0, 0, 0) -moz-use-text-color -moz-use-text-color;
    border-image: none;
    border-right: medium none;
    border-style: solid none none;
    border-width: 1px medium medium;
    font-size: 14px;
    height: 18px;
    margin-left: 2px;
    vertical-align: baseline;
    width: 100%;
}
.toolbar .middle-side .url {
    overflow: hidden;
}
.toolbar .middle-side .domain {
    color: #888888;
    font-size: small;
}
.toolbar .right-side {
    background-color: #EFF7FF;
    float: right;
    height: 19px;
    margin-top: -1px;
}
.toolbar a, .toolbar b {
    border-left: 1px solid #336699;
    display: inline-block;
    font-weight: normal;
    height: 18px;
    outline: medium none;
    overflow: hidden;
    padding: 1px 4px 0;
    white-space: nowrap;
}
.toolbar .likes .score.likes {
    display: inline-block;
}
.toolbar .dislikes .score.dislikes {
    display: inline-block;
}
.toolbar a, .toolbar .clickable {
    color: #336699;
    cursor: pointer;
    text-decoration: none;
}
.toolbar .clickable:active, .pushed-button {
    background-color: #CEE3F8 !important;
    color: #FF4500 !important;
}
.toolbar a img, toolbar b img {
    padding-top: 3px;
    vertical-align: -3px;
}
.toolbar .content {
    float: left;
    vertical-align: middle;
}
.toolbar .logo {
    border-left: medium none;
    margin: 0;
    padding: 0 2px;
    vertical-align: top;
}
.toolbar .title {
    color: #000000;
    display: block;
    overflow: hidden;
    padding-left: 1em;
    padding-right: 1em;
}
.toolbar .title:active {
    color: #FF4500;
}
.toolbar .controls {
    float: right;
}
.toolbar .arrow {
    background-position: left center;
    display: inline-block;
    margin: 0;
    padding-left: 16px;
    width: auto;
}
.toolbar .arrow.upmod {
    background-image: url("../aminiupmod.gif");
}
.toolbar .arrow.downmod {
    background-image: url("../aminidownmod.gif");
}
.toolbar .arrow.up {
    background-image: url("../aminiupgray.gif");
}
.toolbar .arrow.down {
    background-image: url("../aminidowngray.gif");
}
.toolbar-status-bar {
    background-color: #F6E69F;
    border-bottom: 1px solid #336699;
    border-top: 1px solid #336699;
    overflow: auto;
    padding: 0 2px;
}
.toolbar-status-bar .login-arrow-left {
    background-image: url("../tb-loginarrow-left.png");
    background-position: right top;
    overflow: auto;
}
.toolbar-status-bar .login-arrow-right {
    float: right;
    margin-right: 75px;
}
.toolbar-status-bar .login-message {
    background-color: #F6E69F;
    float: left;
    padding-right: 3px;
}
.comments-panel .infobar {
    margin: 5px 10px 10px 3px;
    padding: 3px 10px 7px;
}
#inner_toolbar #reddit_panel, #inner_toolbar #reddit_link_container, #inner_toolbar #reddit_link {
    border: medium none;
    height: 100%;
    position: absolute;
}
#inner_toolbar #reddit_panel {
    width: 0;
}
#inner_toolbar #reddit_link_container, #inner_toolbar #reddit_link {
    width: 100%;
}
#inner_toolbar.expanded #reddit_panel {
    width: 400px;
}
#inner_toolbar.expanded #reddit_link_container {
    left: 400px;
    right: 0;
    width: auto;
}
.min-body {
    height: 100%;
}
.min-body .content {
    border-right: 1px solid #336699;
    margin-top: 0;
    max-width: 60em;
    min-height: 100%;
    overflow: auto;
}
.min-body .content h1, .min-body .content h2 {
    display: inline-block;
    margin-bottom: 15px;
    padding-left: 13px;
}
.min-body .content #noresults {
    margin: 0 0 0 13px;
}
.starkcomment + .clearleft + .starkcomment {
    margin-top: 10px;
}
.starkcomment .commentbox {
    background-color: #F0F0F0;
    color: #000000;
    margin-left: 0;
    margin-right: 10px;
    padding: 5px;
}
.starkcomment .tagline {
    text-align: right;
}
form .blurb {
    margin-bottom: 5px;
}
form .spacer + .spacer {
    margin: 15px 0;
}
form input[type="checkbox"], form input[type="radio"] {
    margin: 2px 0.5em 0 0;
}
.pretty-form {
    font-size: larger;
    vertical-align: top;
}
.pretty-form p {
    margin: 3px;
}
.pretty-form input[type="checkbox"], .pretty-form input[type="radio"] {
    margin: 2px 0.5em 0 0;
}
.pretty-form img {
    margin: 3px 0.5em;
}
.pretty-form input[type="text"], .pretty-form textarea, .pretty-form input[type="password"] {
    border: 1px solid #808080;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3) inset, 0 1px 0 rgba(255, 255, 255, 0.6);
    padding: 2px;
    width: 300px;
}
.pretty-form .infobar {
    margin: 5px;
    width: 285px;
}
.pretty-form input[type="text"], .pretty-form input[type="file"], .pretty-form input[type="password"], .pretty-form select, .pretty-form b, .pretty-form textarea, .pretty-form button {
    margin: 3px 5px;
}
.pretty-form th {
    text-align: right;
}
.white-field, .delete-field {
    background-color: #FFFFFF;
    padding: 10px;
}
.delete-field td {
    vertical-align: top;
}
.pretty-form .delete-field {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.pretty-form .delete-field td label + label {
    margin-left: 2em;
}
#pref-delete textarea#delete-message {
    font-size: smaller;
    height: 5em;
}
#pref-delete .md ul {
    margin-bottom: 0;
    margin-top: 0;
}
#pref-delete .md ul li {
    margin: 0.5em 0;
}
#pref-delete .credentials input {
    margin: 0.2em 0;
}
#pref-delete .credentials .error, #pref-delete .error.RATELIMIT {
    margin-left: 5px;
}
.pretty-form.short-text input[type="text"], .pretty-form.short-text textarea, .pretty-form.short-text input[type="password"] {
    width: 2em;
}
#url-field #suggest-title {
    text-align: right;
}
#url-field button {
    margin: 10px 0 0 5px;
}
#url-field .title-status {
    color: #FF0000;
    font-size: small;
}
.content.submit .info-notice {
    background-color: #E4F2FB;
    border: 1px solid #5F99CF;
    font-size: larger;
    margin-bottom: 12px;
    padding: 9px;
}
.content.submit .info-notice a {
    font-weight: bold;
    text-decoration: underline;
}
.opt-form {
    font-size: larger;
}
.opt-form form {
    display: inline;
}
.preftable th {
    font-weight: bold;
    padding: 10px;
    text-align: right;
    vertical-align: top;
    white-space: nowrap;
}
.preftable th label {
    display: block;
}
.sharetable.preftable th label {
    display: inline;
}
.preftable th span {
    display: block;
}
.preftable td.prefright {
    padding: 8px 0;
}
.preftable .spacer {
    margin-bottom: 5px;
}
.preftable .note {
    padding-top: 10px;
    vertical-align: top;
    width: 100%;
}
.over18 button {
    margin: 0 10px;
    padding: 5px;
}
.entry .buttons li.nsfw-stamp {
    font-size: x-small;
}
.nsfw-stamp acronym {
    border: 1px solid #D27979 !important;
    border-radius: 3px;
    color: #AC3939;
    font-size: x-small;
    padding: 0 2px;
    text-decoration: none;
}
.entry .buttons li.reported-stamp {
    background-color: #F6E69F;
    border: 1px solid #000000 !important;
    padding: 0 4px;
}
.suspicious {
    background-color: #F6E69F;
}
.thing.spam {
    background-color: #FA8072;
}
.comment.spam > .child, .message.spam > .child {
    background-color: #FFFFFF;
}
.comment.spam > .child {
    margin-left: 0;
    padding-left: 15px;
}
.message.spam > .child {
}
.banned-user {
    opacity: 0.7;
    overflow: hidden;
}
.banned-user .title {
    text-decoration: line-through;
}
.approval-checkmark {
    cursor: pointer;
    height: 0.8em;
    margin-left: 3px;
    vertical-align: baseline;
}
.tagline .approval-checkmark {
    height: 1em;
}
.little {
    font-size: smaller;
}
.gray {
    color: #808080;
}
.stats {
    border-collapse: collapse;
    float: left;
    font-size: larger;
    margin-right: 2em;
}
.stats td.space {
    width: 20px;
}
.stats td.sec {
    font-size: 18px;
    font-weight: normal;
    padding-bottom: 7px;
}
.stats a {
    color: #336699;
}
.stats a:hover {
    text-decoration: underline;
}
.stats td.k {
    color: #808080;
}
.stats th {
    background-color: #F5F5F5;
    color: #336699;
    font-weight: bold;
    text-align: left;
}
.stats td.ri {
    padding-left: 20px;
    text-align: right;
}
.thumbnail {
    float: left;
    font-size: 0;
    margin: 0 5px 2px;
    overflow: hidden;
    width: 70px;
}
.thumbnail.nsfw {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -359px;
    background-repeat: no-repeat;
    height: 70px;
}
.thumbnail.self {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -491px;
    background-repeat: no-repeat;
    height: 50px;
}
.thumbnail.default {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -435px;
    background-repeat: no-repeat;
    height: 50px;
}
.stylesheet-customize-container textarea {
    font-family: "Bitstream Vera Sans Mono",Consolas,monospace;
    margin: 0;
    padding: 0;
}
.stylesheet-customize-container h2 {
    margin-bottom: 10px;
    margin-top: 15px;
}
.image-upload .new-image {
    margin-left: 20px;
}
.image-upload span {
    padding-left: 5px;
}
ul#image-preview-list {
    font-size: larger;
    margin: 20px 320px 20px 20px;
}
ul#image-preview-list li {
    float: left;
    height: 100px;
    margin-bottom: 20px;
    padding-bottom: 10px;
    position: relative;
    vertical-align: top;
    width: 45%;
}
ul#image-preview-list .preview {
    display: block;
    float: left;
    max-height: 100px;
    overflow: hidden;
    text-align: center;
    width: 100px;
}
ul#image-preview-list .preview img {
    max-width: 100px;
}
ul#image-preview-list .description {
    margin-left: 105px;
    vertical-align: top;
}
ul#image-preview-list .description pre {
    display: inline;
    padding: 5px;
}
.sheets {
    margin-right: 315px;
}
.sheets .col {
    width: 100%;
}
.sheets .col > div {
    margin: 0 5px;
}
.sheets .col textarea {
    width: 100%;
}
.sheets .buttons {
    margin-left: 5px;
}
.sheets .btn {
    margin-left: 0;
    margin-right: 5px;
}
.sheets .btn.right {
    float: right;
    margin-right: 3px;
}
#validation-errors {
    list-style-type: disc;
    margin-left: 40px;
    margin-top: 10px;
}
#validation-errors a, #validation-errors li, .errors h2 {
    color: #FF0000;
}
#validation-errors a:hover {
    text-decoration: underline;
}
#validation-errors pre {
    color: #000000;
    padding: 10px;
}
#preview-table {
    padding-right: 15px;
}
#preview-table > table {
    border-color: #D3D3D3;
    border-style: dashed;
    border-width: 0.2em;
    margin: 5px;
    padding: 5px;
    width: 900px;
}
#preview-table > table > tbody > tr {
    padding-bottom: 10px;
}
#preview-table > table > tbody > tr > td {
    padding: 5px 15px 5px 5px;
}
#preview-table > table > tbody > tr > th {
    font-size: larger;
    font-weight: bold;
    padding: 5px 15px 5px 5px;
    text-align: right;
    vertical-align: top;
}
#img-preview-container {
    border-color: #D3D3D3;
    border-style: dashed;
    border-width: 0.2em;
    float: left;
    margin: 5px;
    padding: 5px;
}
.private-feeds.instructions .prefright {
    line-height: 2em;
}
.private-feeds.instructions .feedlink {
    background: none no-repeat scroll left top #336699;
    border: 1px solid #0000FF;
    color: #FFFFFF;
    font-weight: bold;
    margin-right: 5px;
    padding: 2px 5px 2px 22px;
}
.private-feeds.instructions .feedlink.rss-link {
    background-image: url("../rss.png");
}
.private-feeds.instructions .feedlink.json-link {
    background-color: #DDDDDD;
    background-image: url("../json.png");
    color: #000000;
}
#sr-header-area {
    background-color: #F0F0F0;
    border-bottom: 1px solid #808080;
    font-size: 90%;
    height: 18px;
    line-height: 18px;
    text-transform: uppercase;
    white-space: nowrap;
}
#sr-header-area .width-clip {
    left: 0;
    position: absolute;
    right: 0;
}
#sr-header-area .selected a {
    color: #FF4500;
}
#sr-header-area .sr-list {
    overflow: hidden;
}
#sr-header-area .dropdown.srdrop {
    float: left;
    padding-left: 5px;
}
#sr-header-area .drop-choices.srdrop {
    margin-left: 5px;
    margin-top: 0;
}
.dropdown.srdrop .selected {
    background: url("../droparrowgray.gif") no-repeat scroll right center rgba(0, 0, 0, 0);
    color: #000000;
    cursor: pointer;
    display: inline-block;
    font-weight: normal;
    margin-left: -5px;
    margin-right: 10px;
    padding-left: 5px;
    padding-right: 21px;
    vertical-align: bottom;
}
.srdrop .choice {
    padding-top: 3px;
}
.srdrop .choice.top-option {
    border-bottom: 1px dotted #336699;
    font-style: italic;
}
.srdrop .choice.bottom-option {
    border-top: 1px dotted #336699;
    font-style: italic;
}
.sr-bar .separator {
    color: #808080;
}
.sr-bar a {
    color: #000000;
}
.sr-bar a.gold {
    color: #9A7D2E;
    font-weight: bold;
}
#sr-more-link {
    background-color: #F0F0F0;
    color: #000000;
    font-weight: bold;
    margin: 0;
    padding: 0 5px 0 15px;
    position: absolute;
    right: 0;
    top: 0;
}
#sr-more-link:hover {
    text-decoration: underline;
}
.subscription-box li {
    clear: left;
    margin-bottom: 10px;
}
.subscription-box .fancy-toggle-button {
    float: left;
    margin-right: 5px;
}
.subscription-box .title {
    color: #0000FF;
    font-size: medium;
    margin-right: 5px;
}
.subscription-box .title.banned {
    color: #696969;
    text-decoration: line-through;
}
.subscription-box .column {
    float: left;
    width: 50%;
}
.subscription-box .box-top {
    height: 20px;
    position: relative;
}
.subscription-box .box-separator {
    border-style: none none dotted;
    border-width: 1px;
    margin-bottom: 5px;
}
.subscription-box h1 {
    text-align: center;
}
.toggle.deltranslator-button {
    display: inline;
}
#sr {
    margin-left: 0;
}
#sr-list-wrapper {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: -moz-use-text-color #808080 #808080;
    border-image: none;
    border-right: 1px solid #808080;
    border-style: none solid solid;
    border-width: medium 1px 1px;
    font-size: smaller;
    height: 200px;
    margin: 0 5px;
    position: relative;
    width: 454px;
}
#sr-list-cover {
    background: none no-repeat scroll center center #808080;
    display: none;
    height: 100%;
    opacity: 0.7;
    position: absolute;
    width: 100%;
    z-index: 1000;
}
#sr-list {
    height: 100%;
    overflow: auto;
    position: absolute;
    width: 100%;
}
#sr-searchfield {
    margin: 0 5px;
}
#sr-name-box {
    display: inline-block;
}
#sr-name-box span {
    display: block;
}
#sr-name-box .tooltip {
    border-bottom: 1px dotted;
    margin-bottom: 2px;
}
.sr-name {
    font-size: small;
    padding: 3px 3px 3px 0;
    vertical-align: top;
}
.sr-description {
    padding: 3px;
}
.sr-row {
    cursor: default;
}
.sr-row.sr-selected {
    background: url("sprite-reddit.hV9obzo72Pc.png") no-repeat scroll -108px -613px #EFF7FF;
}
.sr-arrow {
    height: 12px;
    width: 10px;
}
#sr-autocomplete-area {
    position: relative;
    z-index: 100;
}
#sr-drop-down {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #808080;
    display: none;
    left: 0;
    position: absolute;
    width: 498px;
}
#sr-drop-down table {
    width: 100%;
}
.sr-name-row {
    cursor: default;
}
.sr-name-row.sr-selected {
    background-color: #336699;
    color: #FFFFFF;
}
.submit-header {
    font-size: larger;
    font-weight: bold;
}
#suggested-reddits {
    font-size: small;
    margin-top: 5px;
}
#suggested-reddits h3 {
    font-size: 1em;
    font-weight: normal;
    margin-top: 0.5em;
}
#suggested-reddits li {
    display: inline;
    padding-right: 5px;
}
.formtabs-content {
    border-top: 4px solid #5F99CF;
    padding-top: 10px;
    width: 520px;
}
.formtabs-content .infobar {
    margin: 0;
    padding: 5px;
}
ul.tabmenu.formtab {
    display: block;
    font-size: larger;
    padding-left: 10px;
}
.tabmenu.formtab li {
    margin: 0;
}
.tabmenu.formtab a {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #C1C1C1 #C1C1C1 -moz-use-text-color;
    border-image: none;
    border-style: solid solid none;
    border-width: 1px 1px medium;
    font-weight: normal;
    outline: medium none;
    padding: 0 12px;
    vertical-align: bottom;
}
.tabmenu.formtab .selected a {
    background-color: #5F99CF;
    border: medium none;
    color: #FFFFFF;
    font-size: 130%;
}
.expando {
    clear: left;
    margin: 5px 0;
}
.expando-content {
    display: none;
}
.expando-button {
    background: none no-repeat scroll center center #FFFFFF;
    float: left;
    height: 23px;
    margin: 2px 5px 2px 0;
    width: 23px;
}
.expando-button.selftext.collapsed {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -90px -547px;
    background-repeat: no-repeat;
}
.expando-button.selftext.collapsed:hover, .eb-sch {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -61px -547px;
    background-repeat: no-repeat;
}
.expando-button.selftext.expanded, .eb-se {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -29px -584px;
    background-repeat: no-repeat;
    margin-bottom: 5px;
}
.expando-button.selftext.expanded:hover, .eb-seh {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -584px;
    background-repeat: no-repeat;
}
.expando-button.video.collapsed {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -87px -584px;
    background-repeat: no-repeat;
}
.expando-button.video.collapsed:hover, .eb-vch {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -58px -584px;
    background-repeat: no-repeat;
}
.expando-button.video.expanded, .eb-ve {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -29px -613px;
    background-repeat: no-repeat;
}
.expando-button.video.expanded:hover, .eb-veh {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -613px;
    background-repeat: no-repeat;
}
.subreddit .usertext .md {
    background-color: #FAFAFA;
    border: 1px solid #CCCCCC;
    border-radius: 7px;
    padding: 2px 5px;
}
.link .usertext .md {
    background-color: #FAFAFA;
    border: 1px solid #336699;
    border-radius: 7px;
    padding: 0 5px;
}
.usertext {
    font-size: small;
}
.usertext-edit {
    margin-top: 5px;
    padding: 0 1px;
    width: 500px;
}
.usertext-edit textarea {
    height: 100px;
    width: 500px;
}
.usertext.border .usertext-body {
    background-color: #FFFFCC;
    padding-left: 5px;
}
.usertext.grayed .usertext-body {
    background-color: #F0F0F0;
    color: #808080;
    display: inline-block;
    padding-left: 5px;
    padding-right: 5px;
}
.usertext button {
    margin: 5px 5px 10px 0;
}
.usertext .help-toggle, .usertext a.reddiquette {
    float: right;
    font-size: smaller;
    margin-left: 10px;
    margin-top: 5px;
}
.usertext .bottom-area {
    overflow: hidden;
    width: 100%;
}
.usertext .markhelp {
    border-top: 1px dotted #C0C0C0;
    margin: 5px 0;
    padding: 4px;
}
.usertext .markhelp table {
    margin: 5px 0;
    width: 100%;
}
.usertext .markhelp tr, .usertext .markhelp td {
    border: 1px solid #C0C0C0;
    width: 50%;
}
.usertext .markhelp .spaces {
    background-color: #C0C0C0;
}
.roundfield {
    background-color: #CEE3F8;
    border-radius: 4px;
    font-size: large;
    padding: 5px 10px 10px;
    width: 500px;
}
.roundfield .roundfield-content {
    border: medium none;
    margin-top: 5px;
    vertical-align: top;
}
.roundfield .usertext-edit {
    width: 500px;
}
.roundfield textarea, .roundfield input[type="text"], .roundfield input[type="url"], .roundfield input[type="password"], .roundfield input[type="number"] {
    border: 1px solid #808080;
    font-size: 100%;
    margin: 0;
    padding: 3px;
    width: 492px;
}
.roundfield.captcha .capimage {
    margin-bottom: 10px;
}
.roundfield label {
    font-size: smaller;
    padding-right: 2px;
}
.linefield {
    background-color: #CEE3F8;
    font-size: large;
    margin-bottom: 10px;
    padding: 7px 5px;
    width: 514px;
}
.linefield .title {
    color: #0000FF;
    font-weight: bold;
    padding: 1px 10px;
}
.linefield .title + .gray {
    font-size: x-small;
}
.linefield .small-field, .linefield .delete-field {
    font-size: smaller;
    padding: 0;
}
.linefield span + span {
    margin-left: 10px;
}
.linefield .info {
    color: #FF0000;
    font-size: small;
    font-style: italic;
}
.linefield .linefield-content {
    padding: 2px 7px 5px;
    vertical-align: top;
}
.linefield.usertext .usertext-edit {
    font-size: small;
}
.linefield.usertext .edit-usertext {
    float: right;
    font-size: x-small;
}
.linefield .upload {
    font-size: small;
}
.linefield .upload label {
    font-size: small;
}
.linefield.usertext .infobar {
    width: 100%;
}
.linefield.usertext .usertext-buttons {
    display: none;
}
.linefield textarea, .linefield input[type="text"], .linefield input[type="password"] {
    border: 1px solid #808080;
    font-size: 100%;
    margin: 0;
    padding: 3px;
    width: 492px;
}
.linefield select {
    margin: 0;
}
.linefield.captcha .capimage {
    margin-bottom: 10px;
}
.linefield label {
    font-size: smaller;
    padding-right: 2px;
}
.linefield span {
    font-size: smaller;
}
.linefield input.small-text[type="text"] {
    font-size: smaller;
    width: 100%;
}
#kind-selector label {
    padding-right: 20px;
}
.campaign {
    background-color: #EFF7FF;
    border: 1px solid #336699;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset, 0 1px 0 rgba(255, 255, 255, 0.6);
    padding: 5px;
    width: 570px;
}
.campaign .status {
    font-size: x-small;
}
.existing-campaigns > table {
    border: medium none;
    font-size: x-small;
    margin: 0;
    width: 100%;
}
.existing-campaigns td.campaign-bid .bid-amount {
    display: block;
}
.existing-campaigns td.campaign-bid.paid {
    background: url("../green-check.png") no-repeat scroll right center rgba(0, 0, 0, 0);
}
.existing-campaigns tr.refund {
    color: #FF0000;
    font-weight: bold;
}
.prefright p.minimum-spend {
    color: #808080;
    font-size: small;
    padding-left: 1em;
}
.minimum-spend {
    display: inline;
    padding: 0 5px;
}
.prefright p.minimum-spend.error {
    color: #FF0000;
    font-weight: bold;
}
.existing-campaigns > table > tbody > tr > td {
    border: 1px solid #336699;
    max-width: 120px;
    padding: 5px;
    text-align: center;
}
.existing-campaigns > table > tbody > tr#edit-campaign-tr > td {
    text-align: left;
}
.existing-campaigns > table > tbody > tr > th {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #336699;
    border-image: none;
    border-style: solid;
    border-width: 0 1px 1px;
    font-weight: bold;
    padding: 1px 5px;
    text-align: center;
}
.existing-campaigns > table > tbody > tr > th:first-child, .existing-campaigns > table > tbody > tr > td:first-child {
    border-left: medium none;
}
.existing-campaigns > table > tbody > tr > th:last-child, .existing-campaigns > table > tbody > tr > td:last-child {
    border-right: medium none;
}
.existing-campaigns > table > tbody > tr:last-child > th, .existing-campaigns > table > tbody > tr:last-child > td {
    border-bottom: medium none;
}
.campaign .notes ul {
    font-size: x-small;
    list-style-type: disc;
    margin: 0 20px 10px;
}
.existing-campaigns td > button {
    margin: 2px;
    padding: 2px 4px;
}
.campaign .bid-info {
    font-size: x-small;
}
.campaign .bid-info.error {
    color: #FF0000;
}
.campaign .buttons {
    float: right;
}
.campaign td.prefright {
    padding: 4px;
}
.campaign #bid, .campaign #impressions {
    text-align: right;
    width: auto;
}
.campaign .targeting, .campaign .notes {
    margin-left: 25px;
}
.campaign .targeting input {
    border-radius: 7px;
    width: 95%;
}
.campaign #suggested-reddits ul {
    margin: 0 20px 10px 0;
}
.campaign th {
    font-size: small;
    padding: 8px 4px 4px;
    width: 90px;
}
.linefield .campaign input[type="text"] {
    font-size: x-small;
}
.linefield-content .infotext {
    margin-top: 5px;
}
.linefield-content .infotext p {
    margin: 5px;
}
#campaign td, #campaign span, #campaign label, #campaign li {
    font-size: small;
}
#campaign .geotarget-select {
    clear: left;
    float: left;
    margin-top: 2px;
}
.traffic-table, .traffic-tables-side fieldset {
    border: 0 none;
    font-size: small;
    margin: 1.5em 2em;
}
.traffic-table caption, .traffic-tables-side fieldset legend {
    font-size: medium;
    font-variant: small-caps;
    font-weight: bold;
    text-align: left;
}
.traffic-table caption .normal {
    font-size: small;
    font-variant: normal;
    font-weight: normal;
    margin-left: 0.5em;
}
.traffic-form {
    float: left;
    margin-right: 10em;
}
.traffic-form p {
    font-size: small;
    margin-bottom: 1em;
    max-width: 20em;
}
.traffic-form textarea {
    display: block;
}
.traffic-table a:hover {
    text-decoration: underline;
}
.traffic-table thead th {
    font-weight: bold;
    padding-left: 2em;
    text-align: center;
}
.traffic-table thead th:first-child {
    padding-left: 0;
    text-align: left;
}
.traffic-table tbody th, .traffic-table tfoot th {
    text-align: left;
}
.traffic-table td {
    padding: 0 5px;
}
.traffic-table td {
    text-align: right;
}
.traffic-table tfoot tr {
    border-top: 1px solid #000000;
}
.traffic-table tfoot th, .traffic-table tfoot td {
    font-style: italic;
}
.traffic-table tr.max {
    border-style: solid;
    border-width: 2px;
}
.traffic-table tr.min {
    border: 2px solid #336699;
}
.traffic-table tbody tr:nth-child(2n) {
    background-color: #E0E0E0;
}
.traffic-table tr.mean {
    border-top: 1px solid;
    font-style: italic;
}
.traffic-table .dow-6 th, .traffic-table .dow-6 td {
    padding-bottom: 1em;
}
.traffic-table tr.dow-5:nth-child(2n+1) th, .traffic-table tr.dow-5:nth-child(2n+1) td {
    padding-top: 1em;
}
.traffic-table tr.dow-6:nth-child(2n) th, .traffic-table tr.dow-6:nth-child(2n) td {
    padding-bottom: 0;
}
.traffic-tables-side {
    float: left;
    min-height: 50em;
}
#promote-graph-table, #traffic-hour {
    display: none;
}
div.timeseries {
    border: 1px solid #B0B0B0;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-align: center;
}
.timeseries-placeholder {
    font-family: verdana;
    font-size: small;
    height: 200px;
    width: 350px;
}
div.timeseries span.title {
    font-size: medium;
    font-variant: small-caps;
    font-weight: bold;
}
#timeseries-unprocessed {
    color: #990000;
    font-size: small;
    font-weight: bold;
    margin: 1em 0;
    max-width: 60em;
}
.timeseries-tablebar {
    height: 5px;
    margin: 1px 0;
}
.promoted-traffic .usertable {
    margin-left: 0;
}
.promoted-traffic h1 a {
    font-size: small;
    margin-left: 10px;
}
.promoted-traffic tfoot th, .promoted-traffic tfoot td {
    font-style: normal;
    font-weight: bold;
    padding-top: 0.3em;
    text-transform: uppercase;
}
.promocampaign-table td {
    white-space: nowrap;
}
.traffic-table.promocampaign-table thead th {
    padding: 0 5px;
    text-align: right;
}
.traffic-table.promocampaign-table tr.total {
    border-top: 1px solid #000000;
}
.traffic-table.promocampaign-table tr.active {
    background-color: #FFC0CB;
    border: 2px dotted #FF0000;
    font-weight: bold;
}
.promo-traffic .content .tabmenu li {
    font-size: 1.3em;
}
.promo-traffic #helptext {
    font-size: 1.2em;
    padding: 3px 10px 6px;
}
#promo-traffic-no-campaigns {
    padding: 20px;
}
.promo-traffic .tabpane-content {
    margin-right: 305px;
    min-width: 800px;
    position: relative;
}
.promo-traffic #timeseries-unprocessed {
    font-size: 1.2em;
    margin: 0 0.1em;
    padding: 0;
    position: absolute;
    right: 1em;
    top: -1.3em;
}
.promo-traffic-csv-link {
    font-size: 1.1em;
    font-weight: bold;
    position: absolute;
    right: 15px;
    top: 11px;
}
.promo-traffic-help {
    font-size: 1.2em;
    margin: 20px;
}
.promo-traffic-help p {
    padding: 5px;
}
#promo-traffic-lifetime-stats {
    font-size: 1.1em;
    font-weight: bold;
    margin: 2px 10px;
    padding-top: 5px;
}
.promo-traffic-live {
    background-color: #EFF7FF;
}
.promo-traffic-settings-instructions {
    font-size: small;
    margin: 0 15px 10px;
}
.promo-traffic-settings {
    padding: 20px;
}
p.totals-are-preliminary {
    margin-left: 10px;
}
.award-square-container {
    max-width: 1000px;
    overflow: hidden;
}
.award-square {
    float: left;
    padding: 10px 0 30px 40px;
    white-space: nowrap;
    width: 300px;
}
.award-square.mini {
    text-align: center;
    white-space: normal;
    width: 100px;
}
.award-square img {
    float: left;
    height: 70px;
    margin: 0 10px;
    width: 70px;
}
.award-square.mini img {
    float: none;
    margin-bottom: 7px;
}
.award-square .award-name {
    color: #000000;
    font-family: verdana,arial,helvetica,sans-serif;
    font-size: 22px;
    font-weight: bold;
    line-height: 1em;
}
.award-square.mini .award-name {
    display: block;
    font-size: 18px;
    min-height: 36px;
}
.award-square .winner-info {
    color: #808080;
    line-height: 15px;
    margin-top: 15px;
}
.award-square .winner-name {
    color: #336699;
    font-size: 18px;
}
.lined-table {
    margin: 5px;
}
table.lined-table {
    margin: 5px 3px;
}
.lined-table th, .lined-table td {
    border: 1px solid #CDCDCD;
    padding: 3px;
}
.lined-table th {
    font-weight: bold;
    text-align: center;
}
.sponsorshipbox {
    max-width: 300px;
}
.sponsorshipbox span {
    color: #808080;
}
.sponsorshipbox div {
    border: 1px solid #D0D0D0;
    font-size: 0;
    width: 300px;
}
.sponsorshipbox .promote-pixel {
    right: 0;
}
.sidecontentbox a.helplink {
    float: right;
    margin-top: 4px;
}
.confirm-award-claim .md {
    font-size: 18px;
    max-width: none;
}
.trophy-table {
    width: 100%;
}
.trophy-area .content {
    background-color: #F5F5F5;
}
.trophy-info {
    text-align: center;
    vertical-align: top;
}
.trophy-info div {
    margin-left: auto;
    margin-right: auto;
    padding: 15px 0;
    vertical-align: top;
    width: 130px;
}
.trophy-icon {
    height: 40px;
    margin-bottom: 2px;
    width: 40px;
}
.trophy-info.left {
    margin-right: 10px;
}
.trophy-name {
    color: #000000 !important;
}
.trophy-description {
    color: #555555;
    font-size: x-small;
}
.dust {
    color: #D0D0D0;
    margin: 45px auto;
    text-align: center;
}
.removecup-button {
    display: inline;
}
.cup-info-box {
    border: 2px dashed #EEAA33;
    padding: 5px;
}
.cup-info-box tt {
    background-color: #F5F5AA;
}
.datepicker {
    border-radius: 6px;
    box-shadow: 0 4px 6px 3px rgba(0, 0, 0, 0.2), 0 1px 0 0 rgba(255, 255, 255, 0.9) inset;
    display: none;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
    z-index: 1000;
}
.datepicker:before {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #336699;
    border-image: none;
    border-style: solid;
    border-width: 10px;
    content: " ";
    display: block;
    height: 0;
    left: 17px;
    position: absolute;
    top: -20px;
    width: 0;
}
.datepicker:after {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #E5F2FF;
    border-image: none;
    border-style: solid;
    border-width: 10px;
    content: " ";
    display: block;
    height: 0;
    left: 17px;
    position: absolute;
    top: -18px;
    width: 0;
}
.datepicker.inuse {
    display: block;
}
.ui-datepicker-inline {
    font-size: x-small;
    padding: 5px;
}
.ui-corner-all {
    border-radius: 6px;
}
.ui-datepicker-header {
    background: -moz-linear-gradient(center top , #D4E3F2, #ADC9E6) repeat scroll 0 0 #ADC9E6;
    border: 1px solid #5E96CF;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;
    color: #2E6399;
    font-size: 1.3em;
    font-weight: bold;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.7);
}
.ui-datepicker-inline .ui-datepicker-prev {
    float: left;
}
.ui-datepicker-inline .ui-datepicker-next {
    float: right;
}
.ui-datepicker-inline .ui-datepicker-prev span, .ui-datepicker-inline .ui-datepicker-next span {
    display: block;
    font-size: 1.5em;
    margin-bottom: 1px;
    margin-right: 1px;
    text-align: center;
}
.ui-datepicker-inline .ui-datepicker-prev:active, .ui-datepicker-inline .ui-datepicker-next:active {
    color: #FFFFFF;
}
.ui-datepicker-inline .ui-datepicker-prev.ui-state-disabled, .ui-datepicker-inline .ui-datepicker-next.ui-state-disabled {
    display: none;
}
.ui-datepicker-inline .ui-datepicker-prev, .ui-datepicker-inline .ui-datepicker-next {
    cursor: pointer;
    display: block;
    padding: 0 5px;
}
.ui-datepicker-year {
}
.ui-datepicker-inline .ui-datepicker-title {
    margin: 0 2em;
    padding: 5px;
    text-align: center;
}
.ui-datepicker-inline table {
    border: 1px solid #5E96CF;
    clear: right;
    margin-top: 5px;
}
.ui-datepicker-inline .ui-datepicker-calendar th, .ui-datepicker-inline .ui-datepicker-calendar td {
    border: 1px solid #5E96CF;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.7) inset;
    padding: 0;
}
.ui-datepicker-calendar th {
    font-size: 1.1em;
}
.ui-datepicker-inline .ui-datepicker-calendar th span, .ui-datepicker-inline .ui-datepicker-calendar td span, .ui-datepicker-inline .ui-datepicker-calendar td a {
    background-color: #C8DBEF;
    border: 0 none;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.7) inset;
    color: #000000;
    display: block;
    font-size: 1.5em;
    font-weight: bold;
    height: 2em;
    margin: auto;
    padding: 3px;
    text-align: center;
    vertical-align: middle;
    width: 30px;
}
.ui-datepicker-inline .ui-datepicker-calendar th span {
    border: medium none;
    text-align: center;
}
.ui-datepicker-inline .ui-datepicker-calendar td.ui-datepicker-today a, .ui-datepicker-inline .ui-datepicker-calendar td.ui-datepicker-today span, .ui-datepicker-inline .ui-datepicker-calendar td a.ui-state-active {
    background: -moz-linear-gradient(center top , #76A6D6, #3573B1) repeat scroll 0 0 #4F8AC9;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.6) inset;
    color: #FFFFFF;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.8);
}
.ui-datepicker-inline .ui-datepicker-calendar td span {
    color: #888888;
}
.ui-datepicker-inline .ui-datepicker-calendar td a.ui-state-hover {
    background: none repeat scroll 0 0 #6BB3FF;
    color: #FFFFFF;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.6);
}
.ui-datepicker-inline .ui-datepicker-calendar td a.ui-state-active {
    background: -moz-linear-gradient(center top , #E29D9D, #CA4E4E) repeat scroll 0 0 #E19D9D;
}
.date-input {
    display: inline;
    position: relative;
}
.date-input input {
    border: 1px solid #888888;
    margin: 0 2px;
    padding: 2px;
    text-align: center;
}
.date-input .drop-choices {
    background-color: #E5F2FF;
    border: 1px solid #336699;
    margin: 10px 3px;
    position: absolute;
}
.payment-setup input[name="bid"] {
    text-align: right;
    width: 6em;
}
.payment-setup form {
    margin: 20px;
}
.payment-setup p {
    margin-bottom: 10px;
}
.pay-form textarea[disabled] {
    font-size: smaller;
    padding: 0;
}
.pay-form [disabled], .pay-form input[disabled] {
    background-color: #FFFFFF;
    border: medium none;
    color: #000000;
    font-weight: bold;
}
.bid-table {
    margin: 5px 10px;
}
.bid-table td, .bid-table th {
    padding: 2px 5px;
    text-align: right;
}
.bid-table th {
    font-weight: bold;
    text-align: center;
}
div #campaign-field {
    width: auto;
}
.create-promotion .help {
    font-size: x-small;
}
.create-promotion .help p {
    margin: 5px;
    width: 580px;
}
.create-promotion .help a.help {
    color: #FF4500;
    float: right;
    font-weight: bold;
    text-decoration: none;
}
.create-promo {
    float: left;
    margin-right: 20px;
    min-width: 620px;
}
.create-promo .infobar {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-color: #FF0000;
    color: #000000;
    margin-right: 0;
    width: 100%;
}
.create-promo h2 {
    color: #000000;
    margin-top: 10px;
}
.create-promo ol {
    margin: 0 30px 10px;
}
.create-promo ol > li {
    list-style-type: disc;
}
.create-promo .rules {
    float: left;
    margin-left: 15px;
}
.create-promo textarea, .create-promo input[type="text"] {
    width: 98%;
}
#promo-form .linefield {
    width: 620px;
}
#promo-form .usertext-edit {
    width: auto;
}
.fancy-settings h1, .create-promotion h1 {
    color: #999999;
    font-size: 200%;
    margin: 10px 5px;
}
.fancy-settings h2 {
    color: #999999;
    font-size: 200%;
    font-weight: normal;
    margin: 10px 5px;
}
.fancy-settings h1 strong {
    color: #666666;
    font-weight: bold;
}
.create-promotion .sitetable {
    margin: 5px;
}
.create-promotion .create-promo .save-button {
    float: right;
}
.create-promotion .create-promo .save-button button {
    margin-top: 0;
}
.create-promo .hidden {
    display: none;
}
button.new-campaign:disabled {
    color: #808080;
}
.bidding-history {
    padding-top: 10px;
}
.bidding-history .linefield {
    border-left: 1px dashed #DDDDDD;
    overflow: hidden;
    padding-left: 10px;
    width: auto;
}
.bidding-history .linefield .bid-table, .bidding-history .linefield .notes {
    font-size: x-small;
}
.bidding-history .linefield .notes {
    margin-top: 10px;
}
.bidding-history .linefield .notes p {
    font-family: courier;
    margin-bottom: 2px;
    padding-left: 20px;
    text-indent: -20px;
}
.pay-form tr.input-error th {
    color: #FF0000;
    font-style: italic;
    font-weight: bold;
}
.pay-form th {
    padding: 0;
}
.pay-form tr.input-error input, .pay-form tr.input-error textarea, .pay-form tr.input-error select {
    border: 1px solid #FF0000;
}
.pay-form input[name="expirationDate"], .pay-form input[name="cardCode"] {
    width: 10ex;
}
.pay-form .optional {
    font-size: smaller;
}
.pay-form .disabled .optional {
    display: none;
}
.pay-form p.info {
    color: #FF0000;
}
.pay-link {
    font-size: smaller;
    margin-left: 10px;
}
dt {
    font-weight: bold;
    margin-left: 10px;
}
dd {
    margin-left: 20px;
}
.borderless td {
    border: medium none;
}
.promote-report-form {
    margin: 1.5em 2em;
}
.promote-report-csv {
    font-size: small;
}
.promote-report-table {
    border: 0 none;
    font-size: small;
    margin: 1.5em 2em;
}
.promote-report-table thead th {
    background-color: #CEE3F8;
    border: 1px solid #FFFFFF;
    font-weight: bold;
    padding: 0 1em;
    text-align: center;
}
.promote-report-table thead th.blank {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.promote-report-table thead th[colspan] {
    text-align: center;
}
.promote-report-table td {
    padding: 0 2em;
    text-align: right;
}
.promote-report-table td.text {
    padding: 0 2em 0 0;
    text-align: left;
}
.inventory-table {
    font-size: smaller;
    margin-top: 20px;
    text-align: center;
}
.inventory-table th, .inventory-table td {
    padding: 2px;
}
.inventory-table th {
    border-bottom: 1px solid #000000;
}
.inventory-table td.title {
    text-align: left;
    width: 120px;
}
.inventory-table td:not(.title) {
    border-left: 1px dashed #DDDDDD;
}
.inventory-table tr:nth-child(2n) {
    background-color: #EFF7FF;
}
.inventory-table tr.total {
    background-color: #FFFFCC;
    border-top: 1px solid #000000;
    font-weight: bold;
}
.titlebox {
    font-size: larger;
}
.titlebox h1 {
    font-family: arial,verdana,helvetica,sans-serif;
    font-size: 19px;
    font-weight: bold;
    margin: 0 0 5px;
}
.titlebox h1 a {
    color: #000000;
}
.titlebox .karma {
    font-size: 18px;
    font-weight: bold;
}
.titlebox .fancy-toggle-button {
    display: inline-block;
    margin-right: 5px;
}
.titlebox .bottom {
    border-top: 1px solid #808080;
    color: #808080;
    font-size: 80%;
    padding-top: 2px;
}
.titlebox .age {
    float: right;
}
.titlebox .md {
    font-size: 90%;
}
.titlebox .account-notes {
    font-size: small;
    font-weight: normal;
    margin-left: 5px;
}
.titlebox .account-notes .unusual {
    background-color: #FFDDDD;
    border: 1px solid #FF0000;
    margin-left: 5px;
    padding: 1px 2px 2px;
}
#side-multi-list li {
    display: inline-block;
    margin-right: 3px;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 93px;
}
#side-multi-list + .expand-summary {
    font-size: x-small;
    margin: 3px 0 0;
    padding: 0 4px;
}
.confirm-button .confirmation {
    color: #FF0000;
    white-space: nowrap;
}
.confirm-button .confirmation .prompt {
    margin-right: 0.5em;
}
.gray-buttons button, .gray-buttons a {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    color: #888888;
    font-weight: bold;
    margin: 0;
    padding: 0;
}
.gray-buttons button:hover, .gray-buttons a:hover {
    text-decoration: underline;
}
.multi-details h1 {
    margin-bottom: 0;
}
.multi-details h1 a, .multi-details .throbber {
    vertical-align: middle;
}
.multi-details .throbber {
    margin-left: 5px;
}
.multi-details h2 {
    margin-bottom: 3px;
    margin-top: 0;
}
.multi-details .settings {
    margin-bottom: 5px;
}
.multi-details .settings input[type="radio"] {
    margin: 0 3px 0 0;
    vertical-align: middle;
}
.multi-details .settings button {
    cursor: pointer;
}
.multi-details .settings label, .multi-details .settings > button {
    margin-right: 12px;
}
.multi-details .settings .visibility-group {
    margin-right: 8px;
}
.multi-details h3 {
    color: #777777;
    font-weight: normal;
    margin-bottom: 3px;
}
.multi-details form.copy-multi, .multi-details form.rename-multi {
    display: none;
    margin-bottom: 10px;
}
.multi-details form.copy-multi .multi-name, .multi-details form.rename-multi .multi-name {
    border: 1px solid #CCCCCC;
    padding: 3px;
}
.multi-details form.copy-multi button, .multi-details form.rename-multi button {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 1px solid #777777;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
    opacity: 0.75;
    padding: 3px 4px;
}
.multi-details form.copy-multi button:active, .multi-details form.rename-multi button:active {
    box-shadow: none;
    position: relative;
    top: 1px;
}
.multi-details form.copy-multi .throbber, .multi-details form.rename-multi .throbber {
    display: none;
    height: 22px;
}
.multi-details form.copy-multi.working .throbber, .multi-details form.rename-multi.working .throbber {
    display: inline-block;
}
.multi-details form.copy-multi button {
    background: none repeat scroll 0 0 #EEFFDD;
}
.multi-details form.rename-multi button {
    background: none repeat scroll 0 0 #FFFFDD;
}
.multi-details form.rename-multi .warning {
    color: #C2461F;
    font-weight: bold;
    margin-top: 0.5em;
}
.multi-details .description {
    margin: 0.75em 0;
}
.multi-details .description .usertext-edit, .multi-details .description textarea {
    width: 294px !important;
}
.multi-details ul, .multi-details form.add-sr {
    margin-left: 12px;
}
.multi-details button.remove-sr, .multi-details button.add {
    -moz-box-sizing: content-box;
    background: none no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 3px solid rgba(0, 0, 0, 0);
    margin-left: 3px;
    opacity: 0.3;
    padding: 0;
    text-indent: -9999px;
}
.multi-details button.remove-sr:hover, .multi-details button.add:hover {
    opacity: 1;
}
.multi-details button.remove-sr:active, .multi-details button.add:active {
    position: relative;
    top: 1px;
}
.multi-details button.remove-sr.remove-sr, .multi-details button.add.remove-sr {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -110px -642px;
    background-repeat: no-repeat;
    height: 9px;
    width: 9px;
}
.multi-details button.remove-sr.add, .multi-details button.add.add {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -774px;
    background-repeat: no-repeat;
    height: 15px;
    width: 15px;
}
.multi-details.readonly button.remove-sr {
    display: none;
}
.multi-details .share-in-sr {
    display: none;
}
.multi-details.public .share-in-sr {
    display: inline;
}
.multi-details form.add-sr .sr-name, .multi-details form.add-sr button.add {
    vertical-align: middle;
}
.multi-details form.add-sr .sr-name {
    border: 1px solid #CCCCCC;
    padding: 3px;
}
.multi-details form.add-sr button.add {
    border: 5px solid rgba(0, 0, 0, 0);
}
.multi-details li {
    font-size: 1.15em;
    line-height: 1.5em;
}
.multi-details li a, .multi-details li button {
    vertical-align: middle;
}
.multi-details .bottom {
    margin-top: 1em;
}
.side .recommend-box {
    margin: 15px 5px 30px 0;
    opacity: 0;
    transition: all 0.1s ease-in-out 0s;
}
.side .recommend-box h1 {
    display: inline-block;
    font-size: 1.35em;
    font-weight: bold;
    white-space: nowrap;
}
.side .recommend-box ul {
    margin: 4px 0;
}
.side .recommend-box .rec-item {
    background-color: #F7F7F7;
    border: thin solid #C0C0C0;
    display: inline-block;
    font-size: 1em;
    margin: 2px;
    padding: 0 0 1px 5px;
    position: relative;
    white-space: nowrap;
    width: 136px;
}
.side .recommend-box .rec-item a {
    display: inline-block;
    height: 100%;
    line-height: 1.8em;
    overflow: hidden;
    padding-left: 2px;
    text-overflow: ellipsis;
    vertical-align: middle;
    width: 111px;
}
.side .recommend-box .rec-item button.add {
    background-color: #F7F7F7;
    background-image: none;
    border: medium none;
    cursor: pointer;
    height: 100%;
    opacity: 0.3;
}
.side .recommend-box .rec-item button.add:after {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -774px;
    background-repeat: no-repeat;
    content: "";
    display: block;
    height: 15px;
    width: 15px;
}
.side .recommend-box .rec-item button.add:hover {
    opacity: 1;
}
.side .recommend-box .more {
    color: #336699;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    vertical-align: top;
}
.side .recommend-box .endoflist {
    background-color: #F7F7F7;
    padding: 15px 25px;
}
.side .recommend-box .endoflist h1 {
    margin-bottom: 10px;
}
.side .recommend-box .endoflist .heading {
    color: #555555;
    font-weight: bold;
}
.side .recommend-box .endoflist ul {
    font-size: x-small;
    list-style-type: disc;
    margin: 4px 0 0 20px;
}
.side .recommend-box .endoflist .reset {
    cursor: pointer;
}
.readonly .recommend-box li > button {
    display: none;
}
.hover-bubble.multi-add-notice {
    background: none repeat scroll 0 0 #FFF1D6;
    border-color: #FFB599;
    border-radius: 4px;
    margin-right: 10px;
    margin-top: -5px;
    padding: 10px 15px;
}
.hover-bubble.multi-add-notice:before {
    border-left-color: #FFB599;
}
.hover-bubble.multi-add-notice:after {
    border-left-color: #FFF1D6;
}
.hover-bubble.multi-add-notice h3 {
    font-size: 2em;
}
.hover-bubble.multi-add-notice p {
    color: #808080;
    font-size: 1.5em;
}
.sidecontentbox {
}
.sidecontentbox .content {
    border: 1px solid #808080;
    font-size: larger;
    list-style: none outside none;
    margin: 0;
    padding: 5px;
}
.sidecontentbox .more {
    font-size: smaller;
    margin-top: 5px;
    text-align: right;
}
.sidecontentbox .more a {
    color: #808080;
}
.sidecontentbox .title h1 {
    color: #808080;
    display: inline;
    font-size: 130%;
    margin: 0;
    text-transform: uppercase;
}
.sidecontentbox.collapsible .title {
    cursor: pointer;
}
.sidecontentbox .collapse-button {
    background: none repeat scroll 0 0 #EEEEEE;
    border: 1px solid #999999;
    border-radius: 2px;
    color: #333333;
    display: inline-block;
    font-size: 10px;
    height: 10px;
    line-height: 10px;
    margin: 1px 8px;
    text-align: center;
    vertical-align: bottom;
    width: 10px;
}
.titlebox form.toggle, .leavemoderator {
    background: none no-repeat scroll left center #FFFFFF;
    color: #808080;
    font-size: smaller;
    margin: 0;
    padding: 5px 0;
}
.usertable .moderator.toggle .main:before, .titlebox .leavemoderator:before, .titlebox form.leavecontributor-button:before, .icon-menu .reddit-edit:before, .icon-menu .reddit-traffic:before, .icon-menu .reddit-reported:before, .icon-menu .reddit-spam:before, .icon-menu .wikiaction-pages:before, .icon-menu .wikiaction-revisions:before, .icon-menu .reddit-ban:before, .icon-menu .reddit-flair:before, .icon-menu .reddit-moderationlog:before, .icon-menu .reddit-unmoderated:before, .icon-menu .reddit-moderators:before, .icon-menu .moderator-mail:before, .icon-menu .reddit-contributors:before, .icon-menu .reddit-modqueue:before, .giftgold a:before, .gilded-comments-link a:before, .infobar.gold:before, .gold-form h1.goldgift:before, .users-online:before, .notice-taken:before, .notice-available:before, .info-notice:before {
    content: " ";
    display: block;
    float: left;
    height: 16px;
    margin-right: 5px;
    width: 16px;
}
.titlebox .leavemoderator:before, .moderator.toggle .main:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -774px;
    background-repeat: no-repeat;
}
.moderator.accept-invite .main:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -642px;
    background-repeat: no-repeat;
}
.titlebox form.leavecontributor-button:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -730px;
    background-repeat: no-repeat;
}
.titlebox form.flairtoggle {
    padding: 0;
}
.titlebox .tagline {
    margin: 5px 0 5px 20px;
}
.icon-menu a {
    background: none no-repeat scroll left center #FFFFFF;
}
.icon-menu li {
    margin: 5px 0;
}
.icon-menu .reddit-edit:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -752px;
    background-repeat: no-repeat;
}
.icon-menu .reddit-traffic:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -774px;
    background-repeat: no-repeat;
}
.icon-menu .reddit-reported:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -752px;
    background-repeat: no-repeat;
}
.icon-menu .reddit-spam:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -752px;
    background-repeat: no-repeat;
}
.icon-menu .reddit-ban:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -730px;
    background-repeat: no-repeat;
}
.icon-menu .reddit-flair:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -22px -752px;
    background-repeat: no-repeat;
    margin-left: 1px;
}
.icon-menu .reddit-moderationlog:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -774px;
    background-repeat: no-repeat;
    margin-left: 1px;
}
.icon-menu .reddit-unmoderated:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -22px -774px;
    background-repeat: no-repeat;
    margin-left: 1px;
}
.icon-menu .reddit-moderators:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -774px;
    background-repeat: no-repeat;
}
.icon-menu .moderator-mail:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -29px -817px;
    background-repeat: no-repeat;
    height: 10px;
    margin-left: 1px;
    margin-top: 4px;
    width: 15px;
}
.icon-menu .reddit-contributors:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -730px;
    background-repeat: no-repeat;
}
.icon-menu .reddit-modqueue:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -752px;
    background-repeat: no-repeat;
}
.users-online:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -22px -730px;
    background-repeat: no-repeat;
}
.notice-taken:before, .notice-available:before {
    margin-right: 3px;
}
.notice-taken:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -752px;
    background-repeat: no-repeat;
}
.notice-available:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -642px;
    background-repeat: no-repeat;
}
.info-notice:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -22px -642px;
    background-repeat: no-repeat;
}
.linkinfo {
    background-color: #EFF7FF;
    border: 1px solid #5F99CF;
    border-radius: 3px;
    font-family: arial,helvetica,sans-serif;
    font-size: larger;
    padding: 5px;
}
.linkinfo .score .number {
    font-size: 22px;
    font-weight: bold;
}
.linkinfo .score .word {
    font-size: 15px;
    font-weight: bold;
}
.linkinfo .upvotes {
    color: #FF4500;
    font-size: 80%;
}
.linkinfo .downvotes {
    color: #5F99CF;
    font-size: 80%;
}
.linkinfo .shortlink {
    font-size: 80%;
    margin-top: 3px;
}
.linkinfo .shortlink input {
    border: 1px solid #808080;
    font-family: monospace;
    font-size: 140%;
    padding: 3px 2px;
    width: 175px;
}
.linkinfo .shortlink input:hover {
    cursor: text;
}
.linkinfo table {
    margin-top: 5px;
}
.linkinfo td, .linkinfo th {
    border: 1px solid #808080;
    font-size: smaller;
    padding: 2px;
}
a.adminbox {
    border: 1px solid #EEEEEE;
    color: #CDCDCD;
    font-family: monospace;
    padding-right: 1px;
    text-align: center;
}
a.adminbox:hover {
    border: 1px solid #FF4500;
    color: #FF4500;
    text-decoration: none;
}
.email {
    font-family: monospace;
    font-size: larger;
}
.lined-table, .lined-table th, .lined-table td {
    border: 1px solid #CDCDCD;
    border-collapse: collapse;
    margin-bottom: 10px;
    padding: 2px;
}
.lined-table th {
    font-weight: bold;
}
.wide {
    width: 100%;
}
.centered {
    text-align: center;
    vertical-align: middle;
}
.sr-ad-table .inherited {
    background-color: #DDEEFF;
}
.sr-ad-table .overridden {
    background-color: #FFEEDD;
}
.sr-ad-table .unused {
    background-color: #EEEEEE;
}
.sr-ad-table .inherited .whence {
    font-style: italic;
}
.sr-ad-table .overridden .whence {
    font-weight: bold;
}
.sr-ad-table .details {
    font-size: 150%;
    padding: 10px;
    vertical-align: top;
}
.sr-ad-table .details .codename {
    font-size: 150%;
    margin-bottom: 20px;
}
.sr-ad-table .weight {
    width: 4em;
}
.ad-assign-table .warning {
    color: #FF0000;
    font-weight: bold;
}
a.pretty-button:hover {
    text-decoration: none !important;
}
.pretty-button {
    background: none repeat-x scroll left center #FFFFFF;
    border: 1px solid #666666;
    border-radius: 3px;
    color: #111111;
    display: inline-block;
    font-size: 10px;
    font-weight: normal;
    margin-bottom: 5px;
    margin-left: 5px;
    outline-style: none;
    padding: 1px 6px;
}
a.pretty-button {
    color: #000000;
}
a.pretty-button.pressed {
    color: #FFFFFF;
}
a.pretty-button.negative {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -52px;
    background-repeat: repeat;
}
a.pretty-button.negative.pressed {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -26px;
    background-repeat: repeat;
}
a.pretty-button.neutral {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -104px;
    background-repeat: repeat;
}
a.pretty-button.neutral.pressed {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -78px;
    background-repeat: repeat;
}
a.pretty-button.positive {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -156px;
    background-repeat: repeat;
}
a.pretty-button.positive.pressed {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -130px;
    background-repeat: repeat;
}
.oatmeal img {
    display: block;
    margin: 5px auto;
}
.gold-thanks.gold-accent {
    border-radius: 3px;
    display: block;
    font-size: small;
    margin: 35px auto 0;
    padding: 20px;
    position: relative;
    width: 600px;
}
.gold-thanks p {
    margin: 15px 0;
    text-align: center;
}
.gold-thanks .lounge-msg p {
    font-size: medium;
}
.gold-thanks .fancy-snoo img {
    display: block;
    margin: 10px auto;
    position: relative;
}
.gold-accent {
    background-color: #FFFDCC;
    border: 1px solid #E1B000;
    color: #9A7D2E;
    display: inline-block;
    margin-top: 10px;
    padding: 0 10px 5px;
}
tr.gold-accent {
    border-radius: 3px;
    display: table-row;
}
tr.gold-accent + tr > td {
    padding-top: 10px;
}
.gold-accent.titlebox {
    margin-top: 0;
    padding-top: 0.5em;
}
.allminus-link {
    margin-top: 1em;
}
body:not(.gold) .allminus-link {
    opacity: 0.75;
}
.allminus-link a {
    font-size: 1.15em;
}
.gilded-comments-link {
    margin-top: 1em;
}
.gilded-comments-link a {
    color: #9A7D2E;
    font-size: 1.15em;
    font-weight: bold;
}
.gilded-comments-link a:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -817px;
    background-repeat: no-repeat;
    height: 14px;
    margin: 0 6px 0 1px;
    width: 14px;
}
#per-sr-karma {
    margin: 0.6em auto 0;
    table-layout: fixed;
    width: 300px;
}
#per-sr-karma thead th, #per-sr-karma td {
    text-align: right;
}
#per-sr-karma tbody th {
    text-align: left;
}
#per-sr-karma #sr-karma-header {
    text-align: left;
    width: 150px;
}
#per-sr-karma thead th {
    font-weight: bold;
    padding-bottom: 2px;
}
#per-sr-karma tbody th {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
#per-sr-karma tbody td {
    color: #666666;
    font-weight: bold;
}
#per-sr-karma th.helpful span {
    border-bottom: 1px dotted #666666;
    cursor: help;
    display: inline-block;
}
.more-karmas {
    display: none;
}
.karma-breakdown {
    margin-bottom: 5px;
    margin-top: 0.6em;
}
.karma-breakdown a {
    font-weight: bold;
}
.rel-note button[type="submit"] {
    display: none;
    font-size: x-small;
    margin: 0 0 0 5px;
    padding-bottom: 1px;
    padding-top: 1px;
    width: 45px;
}
.rel-note.edited button[type="submit"] {
    display: inline-block;
}
.rel-note.edited input[type="text"] {
    margin-right: 0;
    width: 250px;
}
.friend-add.edited .ban-reason {
    display: block;
}
.ban-reason {
    display: none;
}
.gold-accent h1, .gold-accent th {
    color: #6A4D00;
    font-family: "Hoefler Text","Palatino Linotype","Book Antiqua",Palatino,georgia,garamond,FreeSerif,serif;
    font-variant: small-caps;
}
.gold-accent .pretty-form input[type="text"] {
    margin-bottom: 2px;
    margin-left: 0;
    margin-top: 1px;
}
.gold-accent .pretty-form input#name[type="text"] {
    border-radius: 3px;
}
.gold-accent .pretty-form button {
    background-color: #FFF088;
    border: 1px solid #9A7D2E;
    border-radius: 3px;
    color: #6A4D00;
}
.gold-expiration-info {
    display: block;
    margin: 3px 0;
    text-align: center;
}
.gold-expiration-info .karma {
    color: #583800;
}
.giftgold {
    margin-bottom: 5px;
}
.giftgold a {
    color: #9A7D2E;
    font-weight: bold;
}
.giftgold a:before, .gold-form h1.goldgift:before, .infobar.gold:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -796px;
    background-repeat: no-repeat;
}
.gold-form p {
    margin-bottom: 8px;
}
.gold-form .gold-button {
    margin-top: 0;
}
.tiny {
    font-size: xx-small;
}
.gold-accent.comment-visits-box {
    color: #583800;
    margin: 0 5px 15px;
    max-width: 550px;
    padding: 7px 10px 7px 7px;
}
.gold-accent.roundfield {
    margin-top: 0;
}
.gold-form {
    font-family: "Hoefler Text","Palatino Linotype","Book Antiqua",Palatino,georgia,garamond,FreeSerif,serif;
    line-height: 22px;
    min-height: 600px;
}
.gold-form .roundfield {
    background-color: #FFFDCC;
    border: 1px solid #E1B000;
    color: #6A4D00;
    width: 510px;
}
.gold-form .note {
    color: #222222;
    font-size: 13px;
    font-style: italic;
    line-height: 16px;
    margin-top: 7px;
}
.gold-form .spacer {
    margin-top: 20px !important;
}
.gold-subsection {
    display: none;
    position: absolute;
}
.gold-form.cloneable {
    display: none;
}
.gold-form textarea, .gold-form input[type="text"] {
    margin-top: 3px;
}
.gold-form .credit-card-input {
    display: inline;
}
.gold-form .stripe-submit {
    display: block;
    margin-top: 10px;
}
.gold-payment form {
    display: inline;
}
.gold-logo {
    float: left;
    margin: 5px 0;
}
.comment .gold-form {
    margin: 0 0 10px 4px;
    min-height: 0;
}
.gold-payment .roundfield-content {
    margin-left: 80px;
}
.gold-payment .close-button {
    background: url("../close.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    float: right;
    height: 13px;
    margin: 6px 4px 6px 8px;
    opacity: 0.25;
    text-indent: -9999px;
    width: 13px;
}
.gold-payment .close-button:hover {
    opacity: 0.55;
}
.gold-payment .close-button:active {
    position: relative;
    top: 1px;
}
.giftmessage {
    background-color: #FFFFFF;
    border: 1px solid #888888;
    border-radius: 3px;
    color: #000000;
    margin-bottom: 15px;
    padding: 0 10px;
}
.gold-button {
    background-color: #EFCC4C;
    border-color: #FFF088 #FFF088 #6A3D00 #6A3D00;
    color: #482800;
    font-family: Palatino,georgia,garamond,FreeSerif,serif;
    font-size: 16px;
    margin-right: 8px;
    margin-top: 8px;
    padding-top: 2px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.7);
}
.gold-button.disabled, .gold-button:disabled {
    background-color: #CCCCCC;
    border-color: #AAAAAA;
    color: #999999;
    text-shadow: none;
}
.gold-dropdown, .goldvertisement {
    font-family: "Bitstream Charter","Hoefler Text","Palatino Linotype","Book Antiqua",Palatino,georgia,garamond,FreeSerif,serif;
}
.gold-dropdown {
    background-color: #FFF088;
    color: #482800;
    font-size: 16px;
}
.gold-expiration-info, .server-seconds {
    border-radius: 5px;
    padding: 6px;
}
.server-seconds {
    background-color: #EFF7FF;
    border: 1px solid #5F99CF;
    text-align: center;
}
.server-seconds p {
    padding: 5px 0;
}
.server-seconds em {
    color: #393939;
    font-weight: bold;
}
.server-seconds-public.bottom {
    border-top-color: #CCCCCC;
    border-top-style: dashed;
    margin-top: 6px;
    padding-top: 10px;
    text-align: left;
}
.server-seconds-public * {
    vertical-align: middle;
}
.server-seconds-public input[type="radio"] {
    margin-top: 0;
}
.server-seconds-public label {
    margin: 0 5px;
    position: relative;
    top: -2px;
}
.server-seconds-public .title {
    float: left;
    margin-right: 10px;
    padding-left: 20px;
}
.comment-visits-box .title {
    font-size: 12px;
    font-weight: bold;
}
.new-comment .usertext-body {
    background-color: #E5EFFF;
    border: 1px solid #CDDAF3;
    margin: -1px 0;
}
.role {
    width: 800px;
}
.styled-input {
    border: 1px solid #808080;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3) inset, 0 1px 0 rgba(255, 255, 255, 0.6);
    padding: 2px;
}
.infobar.client-info {
    height: 48px;
    margin: 10px 2%;
    position: relative;
    width: 94%;
}
.infobar.client-info .icon img {
    height: 48px;
    left: 10px;
    position: absolute;
    width: 48px;
}
.infobar.client-info div {
    line-height: 48px;
    margin-left: 56px;
}
.infobar.client-info div p {
    white-space: nowrap;
}
.oauth2-authorize {
    background: url("../snoo-tray.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    height: 235px;
    margin: 40px auto 0;
    padding-left: 268px;
    padding-top: 18px;
    position: relative;
    width: 542px;
}
.oauth2-authorize h1 {
    margin-left: 10px;
}
.oauth2-authorize h1 a {
    font-weight: bold;
    letter-spacing: -0.04em;
}
.oauth2-authorize .icon {
    height: 72px;
    left: 160px;
    line-height: 72px;
    position: absolute;
    text-align: center;
    top: 69px;
    white-space: nowrap;
    width: 72px;
}
.oauth2-authorize .icon img {
    vertical-align: middle;
}
.oauth2-authorize .access, .infobar.client-info {
    background: none repeat scroll 0 0 #F7F7F7;
    border: 1px solid #B3B3B3;
}
.oauth2-authorize .access {
    float: right;
    font-size: 1.5em;
    line-height: 1.5em;
    padding: 10px 15px;
    position: relative;
    width: 510px;
}
.oauth2-authorize .access:before {
    border-color: rgba(0, 0, 0, 0) #B3B3B3 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    border-style: solid solid outset;
    border-width: 9px;
    content: "";
    display: block;
    left: -19px;
    position: absolute;
    top: 13px;
}
.oauth2-authorize .access:after {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0, 0, 0, 0) #F7F7F7 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    border-image: none;
    border-style: solid;
    border-width: 9px;
    content: "";
    display: block;
    left: -18px;
    position: absolute;
    top: 13px;
}
.oauth2-authorize .access .notice {
    line-height: normal;
}
.oauth2-authorize h2 {
    color: #000000;
    font-size: 1em;
    font-weight: normal;
}
.oauth2-authorize ul {
    list-style-type: disc;
    padding-left: 25px;
}
.oauth2-authorize .notice {
    color: #333333;
    font-size: 0.85em;
    margin: 0.5em 0;
}
.oauth2-authorize .fancybutton {
    cursor: pointer;
    margin: 0 1em 0 0;
}
.oauth2-authorize .fancybutton.allow {
    background: none repeat scroll 0 0 #FF4500;
    border-color: #541700;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.25) inset;
    color: #FFFFFF;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.7);
}
.oauth2-authorize .fancybutton.allow:hover {
    background: none repeat scroll 0 0 #FF571A;
}
.oauth2-authorize .fancybutton.allow:active {
    background: none repeat scroll 0 0 #EB3F00;
    box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.25) inset;
}
.oauth2-authorize .fancybutton.decline {
    background: none repeat scroll 0 0 #EEEEEE;
    border-color: #555555;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    color: #000000;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.7);
}
.oauth2-authorize .fancybutton.decline:hover {
    background: none repeat scroll 0 0 #F7F7F7;
}
.oauth2-authorize .fancybutton.decline:active {
    background: none repeat scroll 0 0 #E4E4E4;
    box-shadow: 0 -1px 0 #FFFFFF inset;
}
.modactionlisting table {
    margin: 0 5px;
}
.modactionlisting td.timestamp, .modactionlisting td.subreddit {
    white-space: nowrap;
}
.modactionlisting td.button {
    padding-left: 1.5em;
    padding-right: 0;
}
.modactionlisting td.description em {
    font-style: italic;
}
.modactions td {
    font-size: small;
    padding: 2px 10px;
    text-align: left;
}
.modactions.banuser, .modactions.unbanuser, .modactions.removelink, .modactions.approvelink, .modactions.removecomment, .modactions.approvecomment, .modactions.addmoderator, .modactions.removemoderator, .modactions.invitemoderator, .modactions.uninvitemoderator, .modactions.acceptmoderatorinvite, .modactions.addcontributor, .modactions.removecontributor, .modactions.editsettings, .modactions.editflair, .modactions.distinguish, .modactions.marknsfw, .modactions.wikirevise, .modactions.wikipermlevel, .modactions.wikibanned, .modactions.wikiunbanned, .modactions.wikicontributor, .modactions.wikipagelisted, .modactions.removewikicontributor, .modactions.ignorereports, .modactions.unignorereports, .modactions.sticky, .modactions.unsticky {
    content: " ";
    display: block;
    float: left;
    height: 16px;
    margin-right: 5px;
    width: 16px;
}
.modactions.banuser {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -730px;
    background-repeat: no-repeat;
}
.modactions.unbanuser {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -686px;
    background-repeat: no-repeat;
}
.modactions.removelink {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -22px -686px;
    background-repeat: no-repeat;
}
.modactions.approvelink {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -642px;
    background-repeat: no-repeat;
}
.modactions.removecomment {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -664px;
    background-repeat: no-repeat;
}
.modactions.approvecomment {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -664px;
    background-repeat: no-repeat;
}
.modactions.addmoderator, .modactions.invitemoderator, .modactions.acceptmoderatorinvite {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -642px;
    background-repeat: no-repeat;
}
.modactions.removemoderator, .modactions.uninvitemoderator {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -686px;
    background-repeat: no-repeat;
}
.modactions.addcontributor {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -642px;
    background-repeat: no-repeat;
}
.modactions.removecontributor {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -686px;
    background-repeat: no-repeat;
}
.modactions.wikipagelisted, .modactions.editsettings {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -752px;
    background-repeat: no-repeat;
}
.modactions.editflair {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -22px -752px;
    background-repeat: no-repeat;
}
.modactions.distinguish {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -22px -664px;
    background-repeat: no-repeat;
}
.modactions.marknsfw {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -664px;
    background-repeat: no-repeat;
}
.modactions.wikirevise {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -708px;
    background-repeat: no-repeat;
}
.modactions.wikipermlevel {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -44px -708px;
    background-repeat: no-repeat;
}
.modactions.wikibanned {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -730px;
    background-repeat: no-repeat;
}
.modactions.wikiunbanned {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -686px;
    background-repeat: no-repeat;
}
.modactions.wikicontributor {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -88px -642px;
    background-repeat: no-repeat;
}
.modactions.removewikicontributor {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -686px;
    background-repeat: no-repeat;
}
.modactions.ignorereports {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -664px;
    background-repeat: no-repeat;
}
.modactions.unignorereports {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -708px;
    background-repeat: no-repeat;
}
.modactions.sticky {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -66px -686px;
    background-repeat: no-repeat;
}
.modactions.unsticky {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: -22px -708px;
    background-repeat: no-repeat;
}
.adminpasswordform {
    display: block;
    margin: 0.5em auto 0;
}
.adminpasswordform label {
    display: block;
    padding: 0.5em;
}
.content.api-help {
    font-size: 1.25em;
    margin: 0 auto;
    max-width: 950px;
}
.api-help .contents {
    margin-left: 24em;
    margin-top: 20px;
    padding: 0 20px;
}
.api-help .contents .section {
    margin-bottom: 2em;
}
.api-help .sidebar {
    float: left;
    margin-left: 10px;
}
.api-help .sidebar .head {
    background: url("../xray-snoo-head.png") no-repeat scroll center top rgba(0, 0, 0, 0);
    height: 188px;
    margin-bottom: -78px;
    position: relative;
    z-index: 2;
}
.api-help .sidebar .feet {
    background: url("../xray-snoo-feet.png") no-repeat scroll center top rgba(0, 0, 0, 0);
    height: 75px;
    margin-top: -42px;
    position: relative;
    z-index: 2;
}
.api-help .toc {
    background: url("../xray-snoo-body.png") repeat-y scroll center center #181818;
    border: 5px solid #959595;
    border-radius: 8px;
    padding: 15px 2em 0;
    width: 18em;
}
.api-help .contents .introduction {
    border: 2px solid #CCCCCC;
    border-radius: 12px;
    margin-bottom: -1em;
    position: relative;
}
.api-help .contents .introduction p {
    margin: 1em 14px;
}
.api-help .contents .introduction strong {
    color: #222222;
    font-weight: bold;
}
.api-help .introduction:before, .api-help .introduction:after {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: -moz-use-text-color;
    border-image: none;
    border-style: solid solid outset;
    border-width: 15px;
    content: "";
    display: block;
    position: absolute;
}
.api-help .introduction:before {
    border-color: rgba(0, 0, 0, 0) #CCCCCC rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    left: -31px;
    top: 58px;
}
.api-help .introduction:after {
    border-color: rgba(0, 0, 0, 0) #FFFFFF rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    left: -28px;
    top: 58px;
}
.api-help .contents .overview h3 {
    margin-top: 1.5em;
}
.api-help .contents .overview p {
    margin: 0.8em 0;
}
.api-help .contents .overview code {
    background-color: #F0F0F0;
    border-radius: 3px;
    padding: 0 0.5em;
}
.api-help .toc ul {
    margin-bottom: 1.5em;
    margin-top: 0.5em;
    position: relative;
    z-index: 10;
}
.api-help .toc > ul > li > strong {
    color: #AAAAAA;
}
.api-help .toc a.section {
    color: #888888;
    font-weight: bold;
}
.api-help .toc a {
    color: #8EB0D2;
    display: block;
}
.api-help .toc a:hover, .api-help .endpoint a:hover {
    text-decoration: underline;
}
.api-help .toc .mode-selector {
    border: 1px solid #888888;
    border-radius: 5px;
    display: inline-block;
    font-size: x-small;
    margin-top: 6px;
    vertical-align: middle;
}
.api-help .toc .mode-selector .mode {
    border-radius: 3px;
    color: #DDDDDD;
    display: inline-block;
    margin: 2px;
    padding-bottom: 3px;
    padding-top: 2px;
    text-align: center;
    width: 107px;
}
.api-help .toc .mode-selector .mode:hover {
    background-color: #CCCCCC;
    color: #000000;
    text-decoration: none;
}
.api-help .toc .mode-selector .mode-current {
    background-color: #EEEEEE;
    color: #000000;
}
.api-help .toc .mode-selector .mode-current:hover {
    background-color: #DDDDDD;
}
.api-help em.placeholder {
    font-style: italic;
    font-weight: normal;
}
.api-help .toc em.placeholder {
    color: #8EB0D2;
}
.api-help .toc li.supports-oauth a {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.api-help .toc li.supports-oauth a:after {
    background: none repeat scroll 0 0 #29440E;
    border-radius: 2px;
    color: #DDDDCC;
    content: "oauth";
    display: inline-block;
    font-size: 0.75em;
    margin-left: 2px;
    padding: 0 2px;
    position: absolute;
    right: 0;
}
.api-help .endpoint em.placeholder {
    color: #336699;
}
.api-help .endpoint, .api-help .section .description {
    margin-bottom: 1.5em;
}
.api-help .oauth-scope-list {
    display: inline;
    margin-left: 1em;
}
.api-help .oauth-scope {
    background: none repeat scroll 0 0 #577439;
    border-radius: 2px;
    color: #FBFBF9;
    display: inline-block;
    font-size: 0.75em;
    font-weight: normal;
    margin-left: 0.5em;
    padding: 2px 6px;
    vertical-align: bottom;
}
.api-help .overview h2, .api-help .methods h2 {
    border-bottom: 1px solid #AAAAAA;
    color: #000000;
    font-size: 1.45em;
    margin-bottom: 1em;
    margin-top: 1.5em;
}
.api-help .methods h2 .scope-id {
    font-size: small;
    font-style: italic;
    font-weight: normal;
    margin-left: 1em;
}
.api-help .endpoint .info {
    border-left: 1px solid #DDDDDD;
    padding-left: 1em;
}
.api-help .endpoint h3, .api-help .endpoint .uri-variants {
    color: #336699;
    margin-bottom: 0.5em;
}
.api-help .endpoint .uri-variants {
    font-weight: bold;
    margin-left: 3em;
    margin-top: -0.5em;
    opacity: 0.85;
}
.api-help .endpoint .method, .api-help .endpoint .extensions {
    color: #808080;
    font-weight: normal;
}
.api-help .endpoint .extensions {
    margin-left: 0.5em;
}
.api-help .endpoint .links {
    float: right;
}
.api-help .endpoint .links a {
    margin-left: 0.85em;
    opacity: 0.45;
}
.api-help .endpoint:hover .links a {
    opacity: 1;
}
.api-help .parameters {
    background: none repeat scroll 0 0 #F0F0F0;
    border-collapse: separate;
    border-radius: 3px;
    border-spacing: 0;
    padding: 5px 10px;
    width: 100%;
}
.api-help caption {
    font-weight: bold;
    margin: 1em 0 0.5em 0.5em;
}
.api-help .parameters th, .api-help .parameters td {
    border-bottom: 1px dotted #CCCCCC;
    margin: 0;
    padding: 5px 0;
    vertical-align: top;
}
.api-help .parameters tr:last-child th, .api-help .parameters tr:last-child td {
    border: medium none;
}
.api-help .parameters th {
    font-family: 'Courier New',monospace;
    width: 50%;
}
.api-help .parameters td pre {
    margin: 0.5em 0;
}
#classy-error {
    text-align: center;
}
.errorpage-message {
    font-size: small;
    margin: 1em auto;
    width: 500px;
}
.errorpage-message.sr-description {
    border-top: 2px solid #000000;
    margin-top: 2em;
    padding-top: 2em;
}
.errorpage-message.sr-description h2 {
    color: #000000;
    font-size: 125%;
    font-weight: bold;
    margin-bottom: 0.7em;
}
.sr-description p {
    margin: 0.75em 0;
}
#pref-otp .roundfield {
    margin: 1em 0;
}
#pref-otp-qr {
    display: none;
}
#otp-secret-info {
    font-size: small;
    margin: 2em;
    width: 512px;
}
#otp-secret-info div {
    margin: 1em 0;
}
#otp-secret-info .secret {
    font-weight: bold;
}
.users-online {
    margin-bottom: 0.25em;
}
.users-online .word, .users-online .number:after {
    cursor: help;
}
.sr-interest-bar {
    background: url("../snoo-upside-down.png") no-repeat scroll 15px top #CEE3F8;
    border: 1px solid #336699;
    margin-bottom: 10px;
    overflow: hidden;
    padding: 5px;
    position: relative;
}
.organic-listing .sr-interest-bar {
    border: medium none;
    margin: 0;
}
.sr-interest-bar .bubble {
    background: none repeat scroll 0 0 #FFFFFF;
    border-radius: 8px;
    font-size: 13px;
    margin-left: 85px;
    margin-right: 68px;
    max-width: 700px;
    padding: 6px;
    position: relative;
}
.sr-interest-bar .bubble:after {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0, 0, 0, 0) #FFFFFF rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    border-image: none;
    border-style: solid solid outset;
    border-width: 10px;
    content: "";
    display: block;
    left: -20px;
    position: absolute;
    top: 15px;
}
.sr-interest-bar .bubble p {
    margin: 0 3px 6px;
}
.sr-interest-bar .subscribe {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 0;
    background-repeat: repeat;
    border: 1px solid #444444;
    border-radius: 3px;
    color: #FFFFFF;
    font-weight: bold;
    padding: 0 6px;
}
.sr-interest-bar .query-box {
    border: 2px solid #979797;
    border-radius: 5px;
    padding: 2px 4px;
    position: relative;
}
.sr-interest-bar.focus .query-box {
    border-color: #5F99CF;
}
.sr-interest-bar.error .query-box {
    border-color: #CF5E5E;
}
.sr-interest-bar .error-caption, .sr-interest-bar.error .caption {
    display: none;
}
.sr-interest-bar.error .error-caption {
    display: block;
}
.sr-interest-bar .query {
    border: medium none;
    font-size: 20px;
    margin: 0;
    outline: medium none;
    padding: 0;
    width: 100%;
}
.sr-interest-bar .throbber {
    position: absolute;
    right: 3px;
    top: 5px;
}
.sr-interest-bar ul.results {
    border-top: 1px dotted #BBBBBB;
    display: none;
    margin: 6px 0 0;
    padding-top: 2px;
}
.sr-interest-bar li {
    display: inline-block;
    margin: 6px 3px;
}
.sr-interest-bar a {
    padding: 1px 2px;
}
.sr-interest-bar a:hover {
    text-decoration: underline;
}
.sr-interest-bar .results .random {
    color: #808080;
    font-weight: bold;
}
.ajax-upload-form iframe {
    display: none;
}
.developed-app, .authorized-app {
    border: 1px solid #000000;
    font-size: x-small;
    margin-bottom: 0.5em;
    margin-left: 20px;
    padding: 7px;
    position: relative;
    width: 880px;
}
.developed-app.collapsed, .authorized-app {
    min-height: 100px;
}
.developed-app .collapsed {
    display: none;
}
.developed-app .ajax-upload-form {
    display: none;
}
.app-details {
    display: inline-block;
    margin-left: 1em;
    min-height: 72px;
    vertical-align: top;
    width: 200px;
}
.app-details h2 {
    font-size: medium;
    margin: 0;
}
.app-details h3 {
    font-size: x-small;
    margin: 0;
}
.app-icon {
    display: inline-block;
    height: 72px;
    line-height: 72px;
    text-align: center;
    white-space: nowrap;
    width: 72px;
}
.app-icon img {
    vertical-align: middle;
}
.app-permissions li {
    position: relative;
}
.app-permissions-details {
    margin-top: 1em;
}
.app-scope {
    background: none repeat scroll 0 0 #FFFDCC;
    border: 1px solid #000000;
    display: none;
    left: 3ex;
    position: absolute;
    top: 1ex;
    z-index: 1;
}
.app-description {
    display: inline-block;
    font-size: small;
    height: 80px;
    overflow-y: auto;
    vertical-align: top;
    width: 597px;
}
.app-developers {
    bottom: 1ex;
    left: 289px;
    position: absolute;
    width: 600px;
}
.edit-app-button, .revoke-app-button {
    bottom: 1ex;
    left: 12px;
    position: absolute;
    width: 200px;
}
.edit-app.collapsed, .edit-app-icon, .developed-app .collapsed {
    display: none;
}
.edit-app-icon-button {
    display: block;
    text-align: center;
    width: 72px;
}
.edit-app-form, .edit-app-form form {
    display: inline-block;
}
.edit-app-form th, .edit-app-icon th {
    width: 12ex;
}
.edit-app-form input.text {
    margin: 0;
    width: 50ex;
}
.edit-app-form input[name="name"] {
    width: 20ex !important;
}
.edit-app-form input[type="file"] {
    width: auto !important;
}
.edit-app-form input[type="submit"] {
    margin-left: 10px;
    width: auto !important;
}
.delete-app-button {
    bottom: 7px;
    left: 100px;
    position: absolute;
}
#create-app {
    display: none;
}
table.diff {
    font-size: small;
}
.diff_header {
    background-color: #D3D3D3;
}
.diff_next {
    background-color: #D3D3D3;
}
.diff_add {
    background-color: #90EE90;
}
.diff_chg {
    background-color: #FFFF00;
}
.diff_sub {
    background-color: #F08080;
}
.gilded-comment-icon {
    color: #99895F;
    display: inline-block;
    font-size: 0.9em;
    margin: 0 0 -15px 8px;
    position: relative;
    top: -8px;
    vertical-align: middle;
}
.gilded-comment-icon:before {
    background-image: url("sprite-reddit.hV9obzo72Pc.png");
    background-position: 0 -817px;
    background-repeat: no-repeat;
    content: "";
    display: inline-block;
    height: 14px;
    margin-right: 2px;
    vertical-align: -3px;
    width: 13px;
}
.user-gilded > .entry .gilded-comment-icon:before {
    width: 23px;
}
body.post-under-6h-old .gilded-comment-icon {
    opacity: 0.55;
}
.buttons li.comment-save-button {
    display: none;
}
.buttons li.comment-unsave-button {
    display: inline;
}
body.gold .buttons li.comment-save-button {
    display: inline;
}
.goldvertisement {
    border: 1px solid #C4B487;
    box-shadow: 0 0 10px #DAD0B3 inset;
    color: #554A2A;
    line-height: 1.3em;
    text-align: center;
}
.goldvertisement .inner {
    border: 1px solid #DBD1B5;
    margin: 1px;
    padding: 6px 8px;
}
.goldvertisement li {
    display: inline-block;
    margin-right: 2em;
}
.goldvertisement h2 {
    color: inherit;
    font-weight: normal;
    margin: 0;
}
.goldvertisement .progress {
    padding: 7.5px 0;
}
.goldvertisement .progress .bar {
    border: 1px solid #DAD0B3;
    border-radius: 10px;
    height: 17px;
    overflow: auto;
}
.goldvertisement .progress .bar span {
    background-color: #F3E287;
    background-image: linear-gradient(to bottom, #FFF8BA 0%, #ECCF90 100%);
    border-radius: 8.5px;
    display: block;
    height: 100%;
}
.goldvertisement .progress p {
    color: #5A3F1A;
    float: right;
    font-size: 15px;
    font-weight: bold;
    line-height: 19px;
    margin-left: 6px;
    margin-top: 0;
}
.goldvertisement a {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: none repeat scroll 0 0 #FBFAF8;
    border-color: #D5C9A9;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 2px;
    color: #554A2A;
    display: inline-block;
    margin: 0;
    padding: 2px 4px;
}
.goldvertisement a:hover {
    background: none repeat scroll 0 0 #FDF4C5;
}
.goldvertisement a:active {
    border-bottom-width: 1px;
    margin-top: 1px;
}
.gold-bubble {
    border-color: #907C47;
    border-radius: 4px;
    font-family: "Hoefler Text","Palatino Linotype","Book Antiqua",Palatino,georgia,garamond,FreeSerif,serif;
    font-size: 125%;
    line-height: 1.13;
    padding: 4px;
    width: 290px;
}
.gold-bubble.anchor-top-centered:before {
    border-bottom-color: #907C47;
}
.gold-bubble p + p {
    margin-top: 1em;
}
.gold-bubble span.gold-branding {
    background: url("../gold/goldvertisement-logo.png") no-repeat scroll left top rgba(0, 0, 0, 0);
    display: inline-block;
    height: 18px;
    margin-right: 1px;
    text-indent: -9999px;
    vertical-align: bottom;
    width: 79px;
}
.gold-bubble p.buy-gold {
    background: url("../gold/goldvertisement-gold.png") no-repeat scroll left top rgba(0, 0, 0, 0);
    margin-left: 13px;
    min-height: 45px;
    padding-left: 67px;
}
.gold-bubble p.buy-gold a {
    color: #825B25;
}
.gold-bubble p.give-gold {
    background: url("../gold/goldvertisement-gild.png") no-repeat scroll left top rgba(0, 0, 0, 0);
    margin-left: 23px;
    min-height: 39px;
    padding-left: 57px;
}
.gold-bubble p.aside {
    color: #777777;
    font-style: italic;
}
.gold-bubble p.aside a {
    color: inherit;
}
.gold-bubble div.history {
    border-top: 1px solid #E2DDCF;
    margin: 5px 0;
    padding-top: 2px;
}
.gold-bubble div.history p {
    margin-bottom: 0;
}
.gold-bubble div.history .progress {
    margin: 0 7px;
    opacity: 0.8;
    padding: 5px 0;
}
.gold-bubble div.history .progress .bar {
    border: 1px solid #DAD0B3;
    border-radius: 10px;
    height: 12px;
    overflow: auto;
}
.gold-bubble div.history .progress .bar span {
    background-color: #F3E287;
    background-image: linear-gradient(to bottom, #FFF8BA 0%, #ECCF90 100%);
    border-radius: 6px;
    display: block;
    height: 100%;
}
.gold-bubble div.history .progress p {
    color: #5A3F1A;
    float: right;
    font-size: 10px;
    font-weight: bold;
    line-height: 14px;
    margin-left: 6px;
    margin-top: 0;
}
.gold-bubble div.history .progress p {
    font-weight: normal;
    margin-right: 0;
}
#stripe-payment th {
    font-size: smaller;
    padding: 5px;
    text-align: right;
    vertical-align: top;
    white-space: nowrap;
}
#stripe-payment .credit-card-amount, #stripe-payment .credit-card-interval {
    text-align: left;
}
#stripe-payment th label {
    display: inline;
}
#stripe-payment td input {
    font-size: small;
    width: 200px;
}
#stripe-payment input.card-cvc {
    width: 5ex;
}
#stripe-payment input.card-address_zip {
    width: 6ex;
}
.stripe-note a.icon {
    background-image: url("../stripe.png");
    float: left;
    height: 33px;
    margin-right: 10px;
    position: relative;
    text-indent: -9999px;
    width: 119px;
}
.stripe-note div {
    float: left;
    font-size: small;
    width: 250px;
}
.gold-subscription {
    font-size: small;
    padding: 2px;
}
.gold-subscription div.buttons {
    padding: 10px 0;
}
.gold-subscription .cancel-button, .gold-subscription .edit-button {
    display: inline;
    margin: 5px;
}
.gold-subscription .status, .gold-subscription .error {
    font-size: small;
    margin: 0;
}
.gold-subscription .roundfield {
    background-color: #FFFDD7;
    width: 400px;
}
.gold-subscription #stripe-cancel {
    display: inline;
}
.permissions {
    display: inline-block;
    font-size: small;
    text-align: right;
    width: 36ex;
}
#moderator_invite .permissions {
    width: 30ex;
}
.permissions > form {
    display: none;
}
.permission-summary {
    border: 1px solid #FFFFFF;
    display: inline-block;
    font-size: small;
}
.permission-summary.edited {
    border: 1px dashed #000000;
}
.permission-bit.added {
    font-weight: bold;
}
.permission-bit.removed {
    text-decoration: line-through;
}
.permission-bit.none {
    font-style: italic;
}
.permissions-edit {
    font-size: x-small;
}
.permission-selector {
    background-color: #FFFFFF;
    border: 1px solid #000000;
    position: absolute;
    width: 24ex;
}
.permission-selector.active {
    display: block;
}
.permission-selector label {
    display: block;
    padding: 0 2px 1px;
    text-align: left;
}
.permission-selector label:first-child {
    border-bottom: 1px solid #000000;
}
.permission-selector label:hover {
    background-color: #BBBBBB;
}
.permission-selector label.disabled {
    background-color: #DDDDDD;
}
.permission-selector form {
    text-align: right;
}
.permission-selector .status, .permission-selector .error {
    text-align: left;
    white-space: normal;
}
.light-button {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 1px solid #777777;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
    opacity: 0.75;
}
.light-button:active {
    box-shadow: none;
    position: relative;
    top: 1px;
}
.light-text-input {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    padding: 2px 5px;
}
body.with-listing-chooser {
    position: relative;
}
body.with-listing-chooser #header .tabmenu {
    margin-left: 8px;
}
body.with-listing-chooser #header .tabmenu li.selected:first-child {
    margin-left: 2px;
}
body.with-listing-chooser #header .pagename {
    bottom: 20px;
    margin-left: 10px;
    position: absolute;
}
body.with-listing-chooser > .content, body.with-listing-chooser .footer-parent {
    margin-left: 148px;
}
body.with-listing-chooser .listing-chooser {
    background: none repeat scroll 0 0 #F7F7F7;
    bottom: 0;
    left: 0;
    overflow: hidden;
    padding-right: 14px;
    position: absolute;
    top: 65px;
    width: 130px;
}
body.with-listing-chooser .listing-chooser.initialized {
    transition: width 0.25s ease 0s;
}
body.with-listing-chooser .listing-chooser.initialized .grippy, body.with-listing-chooser .listing-chooser.initialized .grippy:before, body.with-listing-chooser .listing-chooser.initialized .grippy:after {
    transition: all 0.1s ease 0.03s;
}
body.with-listing-chooser .listing-chooser .grippy {
    background: none repeat scroll 0 0 #FFFFFF;
    border-left: 1px solid #CCCCCC;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    height: 100%;
    position: absolute;
    right: 0;
    width: 14px;
    z-index: 25;
}
body.with-listing-chooser .listing-chooser .grippy:before {
    background: url("../sidebar-grippy-hide.png") no-repeat fixed 131px center rgba(0, 0, 0, 0);
    content: "";
    display: block;
    height: 100%;
    margin-left: 1px;
    opacity: 0.5;
    position: absolute;
    width: 8px;
}
body.with-listing-chooser .listing-chooser .grippy:after {
    border-right: 1px dotted #E5E5E5;
    content: "";
    display: block;
    height: 100%;
    position: absolute;
    right: 5px;
    width: 8px;
    z-index: -1;
}
body.with-listing-chooser .listing-chooser .grippy:hover:before {
    opacity: 1;
}
body.with-listing-chooser .listing-chooser .grippy:hover:after {
    background: none repeat scroll 0 0 #F4F4F4;
}
body.with-listing-chooser .listing-chooser:hover .grippy:before {
    opacity: 0.8;
}
body.with-listing-chooser.listing-chooser-collapsed #header .tabmenu {
    margin-left: 0;
}
body.with-listing-chooser.listing-chooser-collapsed #header .pagename {
    margin-left: 2px;
}
body.with-listing-chooser.listing-chooser-collapsed > .content, body.with-listing-chooser.listing-chooser-collapsed .footer-parent {
    margin-left: 15px;
}
body.with-listing-chooser.listing-chooser-collapsed .listing-chooser {
    padding-right: 15px;
    width: 0;
    z-index: -1;
}
body.with-listing-chooser.listing-chooser-collapsed .listing-chooser .grippy {
    width: 15px;
    z-index: 40;
}
body.with-listing-chooser.listing-chooser-collapsed .listing-chooser .grippy:before {
    background-image: url("../sidebar-grippy-show.png");
    background-position: 2.5px center;
    margin-left: 1.5px;
    width: 9px;
}
body.with-listing-chooser.listing-chooser-collapsed .listing-chooser .grippy:after {
    border-right: 1px solid #CCCCCC;
    right: 5px;
    width: 9px;
}
.listing-chooser h3 {
    color: #777777;
    padding: 4px;
    text-align: right;
}
.listing-chooser .intro {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: none repeat scroll 0 0 #F8ECB6;
    border-color: #FFAE1A -moz-use-text-color;
    border-image: none;
    border-style: solid none;
    border-width: 1px medium;
    margin-bottom: 10px;
    width: 130px;
}
.listing-chooser .intro p {
    font-size: 1.15em;
    margin: 4px 4px 4px 8px;
}
.listing-chooser .intro ul.multis {
    margin: 6px 0;
}
.listing-chooser ul.global, .listing-chooser ul.other {
    padding: 8px 0;
}
.listing-chooser ul.global li, .listing-chooser ul.other li {
    margin-left: 4px;
}
.listing-chooser ul.global li a, .listing-chooser ul.other li a {
    font-size: 1.3em;
    padding: 1em 5px 1em 12px;
}
.listing-chooser ul.other {
    margin-top: 10px;
}
.listing-chooser ul.multis li {
    margin-left: 12px;
    transition: all 0.15s ease 0s;
}
.listing-chooser ul.multis li:hover {
    margin-left: 9px;
}
.listing-chooser ul.multis li a {
    font-size: 1.2em;
    padding: 0.8em 5px 0.8em 10px;
}
.listing-chooser li {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: none repeat scroll 0 0 #FFFFFF;
    border-bottom-left-radius: 5px;
    border-color: #CCCCCC -moz-use-text-color #CCCCCC #CCCCCC;
    border-image: none;
    border-style: solid none solid solid;
    border-top-left-radius: 5px;
    border-width: 1px medium 2px 1px;
    margin-bottom: 3px;
    text-align: left;
}
.listing-chooser li a {
    display: block;
    margin-right: 5px;
    overflow: hidden;
    position: relative;
    text-overflow: ellipsis;
}
.listing-chooser li a .description {
    color: #808080;
    font-size: 0.8em;
    font-weight: normal;
    white-space: nowrap;
}
.listing-chooser li:last-child a {
    border-bottom: medium none;
}
.listing-chooser li.selected {
    background: none repeat scroll 0 0 #E9F2FC;
    border-color: #B3CCE6;
    box-shadow: -30px 0 30px -15px rgba(255, 255, 255, 0.5) inset, 0 2px 6px -1px rgba(0, 0, 0, 0.2);
    margin-right: -8px;
    padding-right: 8px;
    position: relative;
    z-index: 35;
}
.listing-chooser li.selected a {
    font-weight: bold;
}
.listing-chooser li.selected:before {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #79A6D2;
    border-image: none;
    border-style: solid solid outset;
    border-width: 5px;
    content: "";
    display: block;
    margin-top: -5px;
    position: absolute;
    right: 0;
    top: 50%;
}
.listing-chooser li.gold-perks {
    background: none repeat scroll 0 0 #FDFBF2;
}
.listing-chooser li.gold-perks a {
    color: #9A7D2E;
}
.listing-chooser li.gold-perks.selected {
    border-color: #CEC19C;
}
.listing-chooser li.gold-perks.selected:before {
    border-left-color: #C9A74B;
}
.listing-chooser .create {
    padding: 5px;
}
.listing-chooser .create input[type="text"] {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    display: none;
    margin-bottom: 3px;
    padding: 2px 5px;
    width: 95px;
}
.listing-chooser .create .error {
    margin: 4px 0;
    width: 100px;
}
.listing-chooser .create button {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 1px solid #777777;
    border-radius: 3px;
    display: inline;
    margin: 0;
    opacity: 0.5;
    padding: 1px 4px;
    text-align: center;
}
.listing-chooser .create button:hover {
    opacity: 0.9;
}
.listing-chooser .create button:active {
    background: none repeat scroll 0 0 #E9E9E9;
}
.listing-chooser .create button, .listing-chooser .create .throbber {
    vertical-align: middle;
}
.listing-chooser .create .throbber {
    float: right;
}
.listing-chooser .create.expanded input[type="text"] {
    display: block;
}
.listing-chooser .create.expanded button {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 1px solid #777777;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
    opacity: 0.75;
}
.listing-chooser .create.expanded button:active {
    box-shadow: none;
    position: relative;
    top: 1px;
}

.submit_text ol, .submit_text ul {
    margin: 0 0 0 2em;
}
.submit_text.working .content:before {
    background-image: url("../throbber.gif");
    content: "";
    display: block;
    height: 16px;
    width: 16px;
}
.submit_text h1 {
    color: #336699;
    display: block;
    font-size: 16px;
    font-weight: bold;
}
.submit_text .content {
    margin: 0;
}
.submit_text .content p {
    clear: both;
    word-wrap: break-word;
}
.submit_text.enabled {
    display: inline-block;
}

</style>
<div class="md"><p>In DayZ, your character is getting hungry constantly and your time is valuable. There are many buildings you want to loot, but also quite a few you don't want to waste your time with. In this guide I'll go over my favorite buildings to loot and I'll try to give notes that I find helpful. </p>

    <p>Please note that I don't know the official building names(if any), so I will be calling them what I know them as. Feel free to leave a comment if I miss anything or any buildings and I can add to this guide later. I hope this helps anyone out there looking for a little guidance. </p>

    <p>Another note, I recommend using RES(Reddit Enhancement Suite) with this post, It will save you a lot of time when looking at all the images.</p>

    <p>Also All these images were taken in <a href="http://dayzdb.com/map/chernarusplus#5.126.058">Berizino</a>, Great place for loot!</p>

    <p><strong>BUILDINGS YOU WANT TO LOOT</strong></p>

    <ul>
        <li><p><strong><a href="http://i.imgur.com/wQsO0ji.jpg">Med House</a></strong> - Always has a medical supply in it! Also spawns food, melee weapons, backpacks, gun parts... Be sure to check the back room in this house as well (although as of last update it hasn't had loot in it)</p></li>
        <li><p><strong><a href="http://i.imgur.com/Ix2vGGt.jpg">Corner Pub</a></strong> - Another great building, spawns everything! Be sure to go upstairs (in the doorway on the road) and check all the rooms up there, I have found guns a few times. </p></li>
        <li><p><strong><a href="http://i.imgur.com/8SGuTkB.jpg">Apartment Fronts</a></strong> - All of these buildings are great. Again, You can find everything here, even weapons occasionally. The blue door ones have stairs that go up and you'll find loot all the way to the top, <strong>BUT</strong> the rooms the make loud steeping noises also have stairs and you shouldn't bother going up those(still check ground floor for all though). </p></li>
        <li><p><strong><a href="http://i.imgur.com/T7opUpX.jpg">Piano House</a></strong> - Probably the best building to loot, Spawns melee weapons on the piano, and guns on the shelving unit across from the piano. Also spawns rice and other great food! Make sure to check the room upstairs for things like more food and ammo.</p></li>
        <li><p><strong><a href="http://i.imgur.com/TnlBWM5.jpg">Factory</a></strong> - Looks similar to the Piano House, but you'll notice it is longer. This building will spawn ammo in the large machine room, but be sure to also check <a href="http://i.imgur.com/W6xdoSP.jpg">upstairs</a>, I have found guns there as well.</p></li>
        <li><p><strong><a href="http://i.imgur.com/EMGOIn8.jpg">Double Decker Green</a></strong> &amp; <strong><a href="http://i.imgur.com/QzMSZ1B.jpg">Double Decker Red</a></strong> - These two story houses with double doors spawn food and clothing items. </p></li>
        <li><p><strong><a href="http://i.imgur.com/eD0btDQ.jpg">Double Decker Peach</a></strong> - Doesn't have an upstairs, but great for loot as well.</p></li>
        <li><p><strong><a href="http://i.imgur.com/YBIbktq.jpg">Grocery Store</a></strong> - Spawns Food and melee weapons and ammo. </p></li>
        <li><p><strong><a href="http://i.imgur.com/9O9kB0U.jpg">Road Side Kiosks</a></strong> - There are a few styles of these (the one pictured is actually the gas station kiosk). But they all have similar designs. They all may spawn food inside, <strong>BUT</strong> some of them have ladders in the back to go on the roof, where you will find guns! </p></li>
        <li><p><strong><a href="http://i.imgur.com/d4CsWmv.jpg">Two Tone Brown</a></strong> - Check that awning for food.</p></li>
        <li><p><strong><a href="http://cloud-3.steampowered.com/ugc/487814329817542021/2823D1CF55B1E6F2E52C33B32F2E7F9187254AD2/">Ugly Yellow</a></strong> - <em>Thanks to CaptainFiddlebottom &amp; belGician for the suggestion &amp; screen!</em> - All around great for all loot.</p></li>
        <li><p><strong><a href="http://i.imgur.com/EyDfN8q.jpg">Skinny Green</a></strong> -<em>Moved from the no loot section, thanks bengalo &amp; x_Sligh_x</em> - Spawns general items and med supplies.</p></li>
        <li><p><strong><a href="http://i.imgur.com/iWQJ6qf.jpg">Skinny Beige</a></strong> - Check the downstairs for food, but don't bother going upstairs.</p></li>
        <li><p><strong><a href="http://i.imgur.com/pkfuRMS.jpg">Rasta</a> <a href="http://i.imgur.com/3WxSK4R.jpg">Houses</a></strong> - Not the best, but they do spawn food.</p></li>
        <li><p><strong><a href="http://i.imgur.com/WurNnvI.jpg">Peach House</a></strong> - Spawns food as well and ammo, gun part, and clothes. </p></li>
        <li><p><strong><a href="http://i.imgur.com/lBk4sG6.jpg">Train Station</a></strong> - This one is only in a couple cities I believe, but spawns the rare "Press Vest". Also spawns food.</p></li>
        <li><p><strong><a href="http://i.imgur.com/zESBx2Z.jpg">Hanger</a></strong> - Spawns clothes, and gun parts, maybe melee weapons as well?</p></li>
        <li><p><strong><a href="http://i.imgur.com/tzpz5Kg.jpg">School(Small)</a></strong> - Check every room for food and medical supplies, <strong>BUT</strong> the guns spawn in the top floor closet(make sure to look behind that door). Also check the top <a href="http://i.imgur.com/cEkbVA7.jpg">roof</a> where ammo and speedloaders AND Weapons spawn on the rim of that ledge. </p></li>
        <li><p><strong><a href="http://img.dayzdb.com/img/buildings/land_a_office02.jpg">School(Large) aka Office</a></strong> - <em>Thanks for the pic Atanar</em> - Amazing for loot. Weapons spawn in the stair case as well as in the halls, look carefully, that mosin can really blend in with those benches.</p></li>
        <li><p><strong><a href="http://i.imgur.com/wTRrpgS.jpg">Hospital</a></strong> - Spawns, well, medical supplies of course! I don't go here often so someone else can confirm any other notes on this building and I'll add to this.</p></li>
        <li><p><strong><a href="http://i.imgur.com/2DXaMyo.jpg">Construction Building</a></strong> - BACKPACKS! Though not as many since last update, you should still head straight here for a backpack if you can. Also, check that top floor, around the <a href="http://i.imgur.com/v07NnhZ.jpg">Ledges</a> for ammo and speedloaders. </p></li>
    </ul>

    <p><strong>DON'T BOTHER WITH THESE BUILDINGS</strong></p>

    <ul>
        <li><p><strong><a href="http://i.imgur.com/VVbW610.jpg">Cabins</a></strong></p></li>
        <li><p><strong><a href="http://i.imgur.com/4GYsPkK.jpg">Green Split Levels</a></strong></p></li>
        <li><p><strong><a href="http://i.imgur.com/kqOl4cJ.jpg">Red Split Levels</a></strong></p></li>
        <li><p><strong><a href="http://i.imgur.com/x291Wlq.jpg">Large Apartments</a></strong> </p></li>
        <li><p><strong><a href="http://i.imgur.com/iZyhIhP.jpg">Farm House</a></strong></p></li>
    </ul>

    <p>Of Course with development, these house will change, but for now they are a waste of time. </p>

    <p><strong>OTHER NOTES</strong></p>

    <ul>
        <li><strong><a href="http://i.imgur.com/BF5pVZk.jpg">Water Fountains</a></strong> - If you learn the locations of these, you will never need a water bottle or canteen. Spam 'F' on them until you get the notification that you feel full, or similar. Here is the map again, Showing only water pump locations.<strong><a href="http://dayzdb.com/map/chernarusplus#3.079.098">MAP</a></strong></li>
    </ul>

    <p>I hope this guide is helpful for anyone still learning how to gear up and loot efficiently. I would love any feedback (that isn't negative, I'm sensitive you know). And if you know of any other buildings that I should include (Like the larger school and firehouse) then I can always edit and add them later tonight (If you get the screenshot for me then big ups). Good luck surviving to everyone out there!</p>
</div>
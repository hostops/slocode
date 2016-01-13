$(document).ready(function(){
  window.cleditor = $("#editor").cleditor({
               width:"90%", // width not including margins, borders or padding
               height: 250,
               updateTextArea:function(){updateArea();}, // height not including margins, borders or padding
               controls: // controls to add to the toolbar
                   "bold italic underline | size " +
                   "style | color removeformat | bullets numbering | outdent " +
                   "indent | undo redo | " +
                   "image link unlink | cut copy paste pastetext",
               colors: // colors in the color popup
                   "FFF FCC FC9 FF9 FFC 9F9 9FF CFF CCF FCF " +
                   "CCC F66 F96 FF6 FF3 6F9 3FF 6FF 99F F9F " +
                   "BBB F00 F90 FC6 FF0 3F3 6CC 3CF 66C C6C " +
                   "999 C00 F60 FC3 FC0 3C0 0CC 36F 63F C3C " +
                   "666 900 C60 C93 990 090 399 33F 60C 939 " +
                   "333 600 930 963 660 060 366 009 339 636 " +
                   "000 300 630 633 330 030 033 006 309 303",
               sizes: // sizes in the font size popup
                   "2,3,4",
              styles: [["Paragraph", "<p>"], ["Header 1", "<h5>"],
              ["Header 2", "<h6>"], ["Code","<h4>"]],
              docCSSFile:"/styles/code.css"
           });
  $.cleditor.buttons.image.uploadUrl = '/scripts/jquery/jquery-cleditor/imageUpload.php';
});
function updateArea(){
  $("#editor").next("iframe").contents().find("body").find("h4").each(function(){
    $(this).replaceWith("<div class='code'>"+$(this).html()+"</div>");
  });
}
//# sourceURL=http://slocode.xyz/scripts/jquery/jquery-cleditor/cleditorRun.js

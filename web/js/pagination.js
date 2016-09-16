/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function myfkt1() {
   document.getElementById("my1").
           innerHTML = '<ul class="breadcrumb">\n\
                <li><a href="#">Home</a></li>\n\
                <li><a href="#">Private</a></li>\n\
                <li><a href="#">Pictures</a></li>\n\
                <li class="active">Vacation</li>\n\
            </ul>';
} 


function myfkt2(pages) {
   document.getElementById("my2").
           innerHTML = '<ul class="pagination">\n\
                  <li><a href="#">1</a></li>\n\
                  <li class="active"><a href="#">2</a></li>\n\
                  <li><a href="#">3</a></li>\n\
                  <li><a href="#">4</a></li>\n\
                  <li><a href="#">5</a></li>\n\
                </ul>';
} 





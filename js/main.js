/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function CatGet() {
            $.ajax({
               type:'GET',
               url:'core/cat.php',
               response:'text',
               success:function (html){
                   $('#cat').html(html);
               }
            });
        }
        
        function UserGetAll() {
            $.ajax({
               type:'GET',
               url:'core/content.php',
               response:'text',
               success:function (html){
                   $('#users').html(html);
               }
            });
        }
        
        function UserGet(ou) {
            $.ajax({
               type:'GET',
               url:'core/content.php?ou=' + ou,
               response:'text',
               success:function (html){
                   $('#users').html(html);
               }
            });
        }
        
        
        
        
        
        function testPDF(content) {
            var docDefinition = { content: content};
          pdfMake.createPdf(docDefinition).download();
        }
        
        
        
        
        
        $(document).ready(function(){            
           
            CatGet();
            //UserGetAll();
            
            $('#cat').on('click', 'li a', function(){
                //alert($(this).text());
                    UserGet($(this).text());
                    
                
            });
            
             $('#sub_name').click(function(){
                UserGetName($('#get_name').val()); 
             });
         
            
            
            $(document).on('click', '#pdf_send', function(){
                    
                    testPDF($('#users').text());
                    
                
            });

            $('#show_all_cat').click(function(){
                    UserGetAll();
            });

            
            
        });


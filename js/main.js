/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//
//            
//        For old version (no used)
//        
//        function UserGetAll() {
//            $.ajax({
//               type:'GET',
//               url:'core/content.php',
//               response:'text',
//               success:function (html){
//                   $('#users').html(html);
//               }
//            });
//        }
//        
//        function UserGet(ou) {
//            $.ajax({
//               type:'GET',
//               url:'core/content.php?ou=' + ou,
//               response:'text',
//               success:function (html){
//                   $('#users').html(html);
//               }
//            });
//        }
        
        
        
        
        
        function PDF(list) {
            
            var arr = [[ 'ФИО', 'Отдел', 'E-mail', 'Внутренний номер', 'Мобильный' ] ];            
            
            list.forEach(function(tmp){
                if (tmp.Phone === null) {tmp.Phone = ''}; 
                if (tmp.Mail === null) {tmp.Mail = ''};
                if (tmp.Mobile === null) {tmp.Mobile = ''};
                
                arr.push([tmp.DisplayName, tmp.Dn, tmp.Mail, tmp.Phone, tmp.Mobile]);
            });                        
            
            var docDefinition = {
                pageOrientation: 'landscape',
                content: [ {
                    table: {
                      headerRows: 1,
                      widths: 'auto',
                      body: arr
                    }
                  }
                ]
            };
            
            pdfMake.createPdf(docDefinition).download('phones');
        }  
        
        $(document).ready(function(){      
           
            //CatGet();
            //UserGetAll();
            
            $('#cat').on('click', 'li a', function(){
               // alert($(this).text());
               
           });
            
            $(document).on('click', '#pdf_send', function(){
                PDF(pdf);
            });
        });


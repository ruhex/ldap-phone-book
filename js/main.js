/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//
//            
//        For old version (don't used)
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
            
            // Add title columns in PDF document            
            var massiv = [[ 'ФИО', 'Должность', 'Отдел', 'E-mail', 'Внутренний номер', 'Мобильный' ] ];            
            
            list.forEach(function(tmp){
                if (tmp.Phone === null) {tmp.Phone = ''}; 
                if (tmp.Mail === null) {tmp.Mail = ''};
                if (tmp.Mobile === null) {tmp.Mobile = ''};
                if (tmp.Title === null) {tmp.Title = ''};
                
                massiv.push([tmp.DisplayName, tmp.Title, tmp.Dn, tmp.Mail, tmp.Phone, tmp.Mobile]);
            });                        
            
            var docDefinition = {
                pageOrientation: 'landscape',
                content: [ {
                    table: {
                      headerRows: 1,
                      widths: 'auto',
                      body: massiv
                    }
                  }
                ]
            };
            
            pdfMake.createPdf(docDefinition).download('phones');
        }  
        
        $(document).ready(function(){
            
            $(document).on('click', '#pdf_send', function(){
                PDF(pdf);
            });
        });


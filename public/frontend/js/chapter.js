$( document ).ready(function() {
   $('.sst-icon-list').click(function () {
       if($(this).children('.list_chapter').length == 0) {
           var url = $(this).data('url');
           var book_id = $(this).data('book-id');
           var chapter_id = $(this).data('current-chapter');
           var element = $(this);
           if(url) {
               $.ajax({
                   showLoader: false,
                   url: url,
                   data: {
                       bookId: book_id,
                       chapterId: chapter_id
                   },
                   type: "GET",
                   success: function (result) {
                       if(result.code == 200) {
                           if(result.html) {
                               element.html(result.html);
                               element.addClass('span_list_chapter')
                           } else {
                               console.log('dont have html');
                           }
                       } else {
                       }
                   },
                   fail:function (jqXHR) {
                       console.log(jqXHR);
                   }
               })
           }
       }
   });

   $('body').on('change', '.list_chapter', function (event) {
       window.location.href = this.value;
   })
});
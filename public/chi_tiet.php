<?php
require_once __DIR__ . '/../bootstrap.php';

use CT275\Labs\Contact;
use CT275\Labs\Paginator;

$contact = new Contact($PDO);

$limit = (isset($__GET['limit']) && is_numeric($__GET['limit'])) ?
    (int)$__GET['limit'] : 5;
$page = (isset($__GET['page']) && is_numeric($__GET['page'])) ?
    (int)$__GET['page'] : 1;
$paginator = new Paginator(
    totalRecords: $contact->count(),
    recordsPerPage: $limit,
    currentPage: $page
);
$contacts = $contact->paginate($paginator->recordOffset, $paginator->recordsPerPage);
$pages = $paginator->getPages(length: 3);

include_once __DIR__ . '/../partials/header.php';
?>



<body class="container" >
    
    <?php include_once __DIR__ . '/../partials/navbar.php' ?>
		
        



    
  
       
      

       

            
</body>
	






















    

    <?php include_once __DIR__ . '/../partials/footer.php' ?>
    <script>
        $(document).ready(function() {
            $('button[name="delete-contact"]').on('click', function(e) {
                e.preventDefault();

                const form = $(this).closest('form');
                const nameTd = $(this).closest('tr').find('td:first');
                if(nameTd.length > 0) {
                    $('.modal-body').html(
                        `Do you want to delete "${nameTd.text()}"?`
                    );
                }
                $('#delete-confirm').modal({
                    backdrop: 'static', keyboard: false
                })
                .one('click', '#delete', function() {
                    form.trigger('submit');
                });
            });
        });
    </script>



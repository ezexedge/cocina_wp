 <aside class="col-lg-3 col-md-4  bg-primary p-4">
        <?php

            //si el esta activadoo el sidebar le pasamos el id del sidebar que creamos
            if( !is_active_sidebar('sidebar_widget')){
                return;
            }

            dynamic_sidebar('sidebar_widget');

        ?>   
</aside>
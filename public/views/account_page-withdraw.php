<div class="uap-ap-wrap">

       <form action="" method="post">
            <div style="display: inline-block;">
                <input type="number" name="price_tom" id="uap_first_name_field" class="" />



            </div>

            <span class="input-group-addon" id="fee">تومان</span>  
            <input type="submit" value="ثبت درخواست" name="add" id="uap_submit_bttn" class="button button-primary button-large">

       </form>


          <?php




              if(!empty($_POST['add']))
              {


               $current_user = wp_get_current_user();


               $commentcontent= "کاربر   "      .

               $current_user->user_login  .

               " درخواست برداشت وجه به مبلغ ".

               $_POST['price_tom']."

                تومان کرده"   ;



                $page = get_page_by_title( 'tiket' );
                $commentdata = array(
	                'comment_post_ID' => $page->ID,
                    'comment_author_url'=>'',
                    'comment_author_email'=>'',
                 	'comment_author' => 'درخواست برداشت وجه همکاران فروش',
                    'comment_content' =>  $commentcontent,
                	'comment_type' => '',
                    'user_id' => get_current_user_id(),
          );


                if(wp_new_comment( $commentdata,true))
                    echo "درخواست شما ثبت شد پس از تایید مدیریت درخواست برداشت وجه شما انجام میشود";

              }

//Insert new comment and get the comment ID



           ?>


</div>
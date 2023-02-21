<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

@page {
                margin: 100px 25px;            
                /* margin-top: 100px; */
            }

header {
                position: fixed; /* this the part that make header at top every page */
                top: -60px;
                
                /* set the header start and end padding */
                left: 0px;
                right: 0px;
                bottom: 0px;
                 /* set the header height. will overlap the content. need to find way to work on this */
                height: 400px;
                font-size: 20px !important;
                /* z-index: 999; */
                /* color: white; */
                /* line-height: 35px; */
                
            }

            
            /*header .column1, header .column2, header .column3 {
                float: left;
                width: 33.33%;
                border: solid 1px black;
            } */

            /* * {
  box-sizing: border-box;
} */

        /* Create three equal columns that floats next to each other */
            .column {
            float: left;
            width: 33.33%;
            /* padding: 10px; */
            height: 200px; /* Should be removed. Only for demonstration */
            }


            /* Clear floats after the columns */
            .container:after {
            content: "";
            display: table;
            clear: both;
            }   

            main {
   padding-top: 150px; /* change 100px to the height of your header */
}
        

    </style>
</head>
<body>

    <header>
         <div class="container">
            <div class="column" style="background-color:#aaa;">
                <div>aasdf</div>
              <div>aasdf</div>
            </div>
            <div class="column" style="background-color:#bbb;"> 
                <div>aasdf</div>
                <div>aasdf</div>
            </div>
            <div class="column" style="background-color:#ccc;">
                <div>aasdf</div>
                <div>aasdf</div>
            </div>
        </div>
    </header> 
    
    {{-- start contents --}}
    <main>
        <h1>My Heading</h1>
        <p style="">Some content here
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quia voluptate aspernatur
             sit consequatur sed nesciunt ab vitae, quae aliquam dicta nobis corporis illum cupiditate repudiandae aut iusto perferendis quidem voluptatibus laudantium autem accusamus? Rerum aperiam adipisci omnis fugit cum debitis nostrum saepe modi vel corporis commodi, ut, molestias perferendis.    
        </p>
        <p style="margin-top: 100px;">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit dolore dolor quam perspiciatis ratione voluptatem enim excepturi totam officia mollitia pariatur dolorum voluptatibus placeat eveniet, accusamus molestias saepe, dolores, iure facere. Iure, suscipit. Nam molestias ipsam tempora at animi minima rerum cupiditate cumque quia similique rem aut, quod laudantium doloribus reiciendis nisi id laboriosam vitae quidem! Nihil rerum esse placeat aspernatur repudiandae officiis quo repellat eveniet impedit? Possimus fuga distinctio quia aliquid beatae ut quos. Possimus laboriosam ad tempora nostrum excepturi culpa, placeat vero quia adipisci nam sed provident consequatur voluptas aliquid quaerat veritatis fuga nihil quos repellendus voluptates. Reiciendis, qui vel. Expedita quisquam vel magni eum repudiandae, laudantium eos ullam quaerat voluptatum animi minima adipisci sequi similique eius! Sapiente, culpa quod distinctio ratione, magni dolores eligendi, fugiat placeat repellendus hic in dicta eaque est quibusdam voluptas! Magni perferendis, est corrupti beatae consequuntur saepe aut voluptas rerum ullam dolorum et veniam repudiandae! Qui temporibus, iusto consequuntur laudantium natus quisquam perferendis facilis repudiandae ducimus quibusdam animi eligendi pariatur similique amet iste ipsum vitae nihil veritatis recusandae sequi! Provident adipisci, nulla minus dolore quidem dicta exercitationem, maiores, excepturi nihil officia facere necessitatibus commodi sed dolor rem accusantium laboriosam doloremque? Optio possimus architecto veniam perspiciatis est recusandae vitae magnam expedita minus necessitatibus, consequuntur illum, obcaecati saepe iusto non accusamus maxime facilis voluptatum sed unde, ab harum tempora hic. Porro ad id, debitis culpa minus distinctio quia dolor eligendi, eveniet nihil a in ab commodi ducimus, labore animi officiis laborum. Itaque consectetur necessitatibus ipsam corporis aut iusto ea accusantium odio. Numquam tempore, eveniet sit ut a earum optio, harum quis totam aliquid culpa aspernatur? Esse ipsam atque itaque labore veritatis, distinctio quidem. Quam commodi numquam atque possimus architecto explicabo sit! Cupiditate rem illo fugit. Ducimus, ut corrupti dolorum cumque, hic laudantium, ipsum molestiae tempora laboriosam iure sint animi voluptate possimus. Eaque hic rem tenetur quidem nesciunt itaque aperiam inventore rerum nostrum. Culpa veritatis animi optio molestias placeat in consectetur fuga, reiciendis sunt accusamus dignissimos, nostrum voluptatibus! Adipisci debitis amet itaque blanditiis natus in repudiandae mollitia expedita aliquid velit repellat vero placeat, suscipit autem molestiae temporibus rem! Tenetur similique fuga officia tempora est, esse repellat, porro asperiores, nobis aperiam possimus veniam voluptate voluptas aliquid debitis aut! Labore ducimus dolores neque nisi, libero voluptatum animi, sed pariatur voluptas, repudiandae dolore reiciendis porro deleniti dicta. Harum vel, maxime dolore pariatur reprehenderit, dolores ipsum obcaecati rerum ducimus exercitationem hic, nemo possimus? Esse tenetur blanditiis nisi et animi quia expedita, rem saepe velit culpa soluta veniam sint quo atque similique suscipit, adipisci, nesciunt cumque nemo eum tempora modi nam quos? Iure ab voluptatum est ducimus dolorem. Voluptates totam quod doloremque ipsa hic, laborum odit nam inventore modi corrupti. Quibusdam facere voluptates ipsam, dignissimos itaque quas optio esse. Maxime expedita ipsa molestias fugiat accusantium repellat odit cum, in, doloribus delectus praesentium! Quod a similique omnis suscipit fuga amet, sequi iure neque assumenda delectus, illo laborum ipsa modi minima, molestiae voluptatum eveniet saepe illum ipsam. Sit earum architecto ipsum saepe officiis id nam totam voluptas, commodi itaque velit alias est quos inventore nihil accusamus unde non sunt repellat dignissimos placeat sapiente ipsam. Vitae veniam illo autem culpa maxime, labore rerum neque nemo aspernatur eveniet deserunt iusto porro ea quos? Voluptatibus exercitationem ducimus, illum sint possimus tempora perferendis consectetur! Perferendis, voluptate vero accusantium magnam quae laborum optio eius enim dolorum laboriosam recusandae fugit aut vel quidem nemo blanditiis voluptas porro? Alias non sed ipsum perspiciatis pariatur blanditiis voluptatibus eveniet atque aliquam ab ullam soluta molestias unde, eligendi dolores dolore minima quo amet. Libero soluta nesciunt cumque totam, repellendus expedita nihil corporis quas, officia voluptates nulla inventore doloribus rem, eum dolorum dolore esse pariatur quis nostrum perspiciatis earum facere culpa. Iusto error accusamus molestiae quis aliquam distinctio ea excepturi. Sequi ipsa ex consequuntur veniam repudiandae sapiente. Dolorem voluptas veritatis possimus maxime deserunt molestias distinctio delectus doloremque ipsam labore accusamus explicabo ea velit culpa, perspiciatis cumque perferendis illo exercitationem adipisci optio! Sint harum ea veniam impedit voluptates tempore nobis. Voluptatem corporis temporibus nostrum deserunt quis totam expedita exercitationem assumenda quia accusamus beatae harum ab facere voluptatibus neque officiis eius dolor voluptas impedit dolorem corrupti nobis praesentium, maiores quaerat! Fugiat repudiandae eaque alias minima dolorum!
    </p>
     </main>
{{-- end contents --}}
</body>
</html>
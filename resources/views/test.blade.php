<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <style>
        
        /* set the page margin for pdf or print */
        @page {
            /* margin: 150px 50px 80px 50px; */
            margin: 150px 50px 100px 50px; 
        }

        /* header section */
        header {
            /* no need to set height */
            position: fixed;
            top: -100px;
            width: 100%;
            font-size: 12pt;
            /* font-size: 11pt; */
        }

        /* header table */
        table {
            border-collapse: collapse;
            width: 100%;
            /* background: #f6f8ff; */
        }

        td {
            /* padding: 16px; */
            /* border:1px solid #777; */
        }

        .header_logo {
            width:15%;
            padding-bottom: 20px;
            /* vertical-align: top; */
            /* background: palegreen; */
        }

        .logo {
            /* width: 170px; */
            /* height: 170px;  */
            /* vertical-align: top; */
            /* max-width: 100%; */
            /* height: auto; */
            width: 146px;
            height: 135px;  
        }

        .header_company {
            width:30%;
            text-align: left;
            vertical-align: top;
            padding-top: 10px;
            padding-left: 10px; 
            padding-bottom: 20px;
            font-size: 11pt;
            /* background: plum; */
        }

        .header_title {
            width:25%;
            text-align: right;
            vertical-align: bottom;
            font-weight: 900;
            text-decoration: underline;
            /* font-size: 18pt; */
            font-size: 25pt;
            padding-bottom: 20px;
            /* background: peachpuff; */
        }

        .header_billing {
            text-align: left;
            vertical-align: top;
        }

        .header_info  {
            vertical-align: top;
        }

        .header_info_label {
            vertical-align: top;
            text-align: right;
            padding-left:14px;
        }

        .header_info_data {
            vertical-align: top;
            text-align: left;
            padding-left:10px;
        }

        .bold {
            font-weight: bold;
        }

        .underline {
            border-bottom: 1pt solid #000;
            width: 65%;
        }

        /* footer section */
        footer {
            position: fixed;
            bottom: -50px;
            height: 30px;
            /* background-color: #333399; */
        }

        footer .page-number {
           background: blue;     
        }

        body {
            /* for set the margin(space break) from header and content  */
            margin-top: 250px;
        }

        #contents {

        }

        .page-break {
            page-break-after: always;
        }

    
    </style>

</head>
<body>

    <header>
        <table>
            <tr>
              <td class='header_logo'>
                {{-- <img src="{{ storage_path('app/public/images/3td_logo1.png') }}" class="logo"> --}}
                <img src="{{ storage_path('app/public/images/3tds_logo_3.png') }}" class="logo">
              </td>
              <td class='header_company'>
                SA-10-06, PARAGON @ PAN'GAEA,<br>
                Persiaran Bestari,<br>
                63000,Cyberjaya, Selangor.<br>
                Business Registration No:&nbsp;1182596-P<br>
                Phone :&nbsp;03-8685 0465<br>
                Email :&nbsp;sales@3tds.com.my<br>
                Website :&nbsp;www.3tds.com.my<br>
            </td>
            <td class='header_title'>TAX INVOICE</td>
            </tr>
            <tr>
              <td class='header_billing' colspan='2'>
                <span class="bold">Billing Address:</span><br>
                <div class="underline bold">Lembaga Peperiksaan</div>
                <div class="underline">Jln Tunku Abdul Halim,</div>
                <div class="underline">Kompleks Kerajaan, 540480 Kuala Lumpur,</div>
                <div class="underline">Wilayah Persekutuan Kuala Lumpur</div>
              </td>
              <td class='header_info'>
                <table>
                    <tr>
                        <td>
                            <div class="header_info_label">Invoice No :</div>
                            <div class="header_info_label">P.O No :</div>
                            <div class="header_info_label">Date :</div>
                            <div class="header_info_label">Due :</div>
                            <div class="header_info_label">SST :</div>
                            <div class="header_info_label">Page :</div>
                        </td>
                        <td>
                            <div class="header_info_data">INV-230101-001</div>
                            <div class="header_info_data">PO-200101-001</div>
                            <div class="header_info_data">13-02-2023</div>
                            <div class="header_info_data">30 Days</div>
                            <div class="header_info_data">W24-2010-32000007</div>
                            <div class="header_info_data">1 of 1</div>
                          </td>        
                    </tr>
                </table>
              </td>
              
            </tr>
          </table>
    </header>

    <footer>
        <div class="page-number">this is footer</div>
    </footer>

    <main>
        <div id="contents">
        <h1>This is Page 1 tittle: "{{ $title }}" with long contents.</h1>
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores cupiditate est modi aut atque maxime. Aspernatur, sapiente placeat libero aperiam ab facilis tempore ad porro id quo laudantium a rem voluptas explicabo voluptate, ratione cumque perspiciatis odit eveniet eaque ipsam sed obcaecati quasi et! Reprehenderit ullam consequuntur eveniet, sint minima optio expedita fuga sapiente exercitationem nam repellendus tempore cum consequatur itaque vitae esse totam eos praesentium labore quaerat vero accusamus sequi. Voluptates fugit dignissimos necessitatibus tenetur? Debitis facilis praesentium, temporibus rem delectus maiores? Voluptates velit necessitatibus quisquam, quo cupiditate eum assumenda voluptatem sed quos provident et quibusdam fugit dolorum fugiat? Quaerat maiores alias, asperiores eum obcaecati optio voluptates corporis accusamus. Illum aut ullam quasi earum consequuntur ratione dicta alias excepturi magnam sed, voluptatibus ut eius rerum aperiam ipsa inventore tenetur unde sunt assumenda laborum amet. Animi ipsa placeat, necessitatibus esse odit quia vel dolorum, repudiandae veritatis quidem numquam aliquam dicta non sequi illo ea beatae aspernatur saepe! Dicta autem dolore deserunt molestiae, commodi in incidunt, amet excepturi, similique quis cum aliquam magnam nisi dolor ut provident impedit nam esse nobis repudiandae enim tempora ipsa? Omnis at fugiat rem inventore repellat nihil eligendi, ea impedit suscipit dolor blanditiis nobis repudiandae et eveniet dolorem aut doloribus! Libero, officiis voluptates? Maiores ut placeat, fugiat ratione suscipit quod. Nisi sit accusamus minus ducimus doloremque dicta, vitae fuga, optio quasi iusto corrupti libero velit at! Accusantium rem veritatis nobis similique libero aliquid, consequatur veniam earum modi officiis, deserunt alias nam cum eligendi eaque quas? Iste atque perspiciatis iure, ut ea delectus nemo cum quas quaerat labore ducimus quod voluptates minima repellat vitae, optio molestias quidem ad quia facere. Ratione, porro beatae ut pariatur eius inventore vitae! Atque cumque veritatis iusto at beatae nemo sed, mollitia repellendus praesentium cum aspernatur voluptates? Sint temporibus sunt libero eum illo omnis expedita labore mollitia explicabo. Temporibus, facere illum. Quas reprehenderit non voluptates incidunt quaerat quasi at eos alias veritatis, ut nihil dolore temporibus laboriosam quis, tempore voluptas ducimus nostrum perspiciatis recusandae cum deserunt nam debitis magni id. Quam fugiat vel voluptatem fugit cumque amet eos dolores harum ratione cum! Minus laudantium beatae obcaecati, praesentium amet nesciunt consequuntur quibusdam, voluptates ipsum debitis, molestiae aliquid ullam tempora iste nisi adipisci eaque dolore error corrupti sed dolor placeat est. Impedit optio repellendus quo a, eius aperiam porro adipisci sint ea, hic ipsa dolor eligendi vitae veniam quibusdam aliquam tenetur nostrum! Cum aut laboriosam officia, odit a enim natus porro praesentium cupiditate delectus optio dolores aliquam, ipsum, et facere iusto? Amet et soluta facere in iusto minima, cupiditate provident temporibus quibusdam harum, repudiandae repellat. Facilis consequuntur sint, vel soluta a aliquid odio doloremque explicabo distinctio deleniti provident tenetur nobis! Voluptas, error culpa. Laboriosam placeat dicta optio ex perspiciatis molestias inventore quo eius tempora nam consectetur incidunt aliquam neque maxime odit totam laborum obcaecati eos, expedita quis nihil? Et dicta perferendis veniam totam quisquam culpa, modi tempora repellat. Beatae quia vero numquam, quidem autem voluptatum maxime molestiae pariatur esse debitis optio, maiores odio dignissimos!
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloremque velit repudiandae ratione. Amet, sunt illo! Fugit obcaecati harum alias tempora pariatur eveniet dolor accusamus, architecto laudantium soluta unde corrupti commodi repellat illum minus rem ad autem asperiores nisi iure? Ab tenetur ad blanditiis alias deleniti, dolorem ut sed, voluptas dicta incidunt ipsum sunt eum ea, illum nesciunt ipsam veniam consequuntur laborum. Excepturi laudantium quis repellat natus, pariatur ab magni hic maxime quae error. Adipisci ducimus recusandae quae doloribus quia sed in sequi dolore magni? Reiciendis soluta, quia pariatur praesentium quaerat at iste aspernatur, tempore veniam aliquid perspiciatis error excepturi molestiae est dolore sint corporis fugit cum nemo quo velit libero dolores cupiditate quasi? Maxime nisi pariatur nostrum, hic sed id nihil praesentium architecto nam minus enim iure culpa ex itaque nesciunt fugiat expedita optio illo nobis amet debitis temporibus accusamus vitae. Deserunt, ipsa incidunt qui alias quos nemo omnis voluptatum accusamus reprehenderit atque rerum nihil, tempore vero! Mollitia quidem reiciendis ea ad quia dolorum incidunt obcaecati culpa ut? Quam tempore eum perspiciatis praesentium reiciendis facilis repudiandae ab temporibus sit dignissimos? Dolore fuga maxime ullam facere quae dignissimos accusantium saepe exercitationem cumque perferendis debitis, officia obcaecati? Expedita, fuga nobis atque laborum dolor minima ratione a repellendus maxime esse accusamus, placeat debitis cum aliquid quaerat ad doloribus ab! Neque qui tempore at nostrum nihil laudantium dicta est iure, rerum saepe error ab, veniam unde provident illum explicabo delectus. Fugiat eos at sint explicabo vel eveniet quam a qui blanditiis quos, exercitationem quidem in. Saepe facilis error perferendis, dolore nisi consequatur. At in sed sequi amet inventore, iusto dolorum ipsa consectetur nulla! Eum neque modi, aliquid quae corrupti maiores aliquam beatae. Eum, odit officia distinctio delectus blanditiis porro animi quidem laudantium totam esse velit nobis ad minima, sequi fugiat! Iste officiis eveniet quas amet obcaecati dolores, doloribus ad quia sit quaerat maxime quasi exercitationem ducimus, inventore omnis ipsa aspernatur ullam. Dolores molestiae, sint, voluptatum dolorem iure quos sunt tenetur soluta voluptates aliquam aut provident quas accusamus illo tempore nobis, eius culpa quasi. Ex autem eum aperiam id dignissimos voluptates quae in ea alias assumenda. Magnam facere magni consequuntur debitis nam facilis aut nemo voluptate voluptas, consectetur a amet quos modi repudiandae neque? Quos, libero! Fugiat alias dolores ab iure repellendus enim, nihil nulla quibusdam quae iusto facere officia beatae quaerat minima consectetur a temporibus praesentium cupiditate. Facilis saepe provident facere molestiae similique nulla incidunt tenetur fuga, nihil dolores sapiente amet voluptates praesentium quis aliquid ducimus, animi aut quae? Ipsa obcaecati quas omnis, unde ipsum iste ratione et blanditiis commodi molestias autem aliquid sit illum consequatur inventore eos similique laudantium! Veritatis, tempore ullam doloribus dignissimos ratione neque. Magni culpa necessitatibus dicta a ipsa. Laboriosam perferendis nesciunt alias repellendus ipsa dolores modi reiciendis, accusamus mollitia libero ipsam eveniet obcaecati neque error? Mollitia illum quisquam maxime veniam aliquid harum doloremque, quasi magnam nulla tempora repellendus similique adipisci sit nesciunt quas ipsam voluptate saepe neque officia eaque possimus suscipit dignissimos necessitatibus. Quasi voluptatum eum accusamus quis?
        </p>
        </div>
        
        <div class="page-break"></div>

        <div id="contents">
            <h1>This Page 2</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta perspiciatis error minus voluptatem possimus reprehenderit nihil modi dolor aspernatur reiciendis?</p>
        </div>
    </main>

</body>
</html>
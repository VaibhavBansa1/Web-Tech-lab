<?php
session_start();
$question_and_file = [

    'My Portfolio' => '22017C04069_65.php',

    'Entering data into a MySQL table using PHP' => 'http://vaibhavbansal.rf.gd/index.php',

    'Make a Calendar using JavaScript' => '22017C04069_64.php',

    'Copy of google home page' => '22017C04069_63.php',

    'Make a calculator using HTML, CSS and JavaScript' => '22017C04069_62.php',

    'Write a code for html webpage which displays your name, college name, and semester.' => '22017C04069_1.php',

    'Write a code for html webpage which redirects to Google page.(using < a> tag).' => '22017C04069_2.php',

    'Write a code for html web page which redirects to polygwalior website, Google and some documents using < a> tag.' => '22017C04069_3.php',

    'Write a code for html webpage which displays the image of Virat Kohli.(using < img> tag).' => '22017C04069_4.php',

    'Write a code for html webpage which displays the image of Sachin Tendulkar (using < img> tag).' => '22017C04069_5.php',

    'Write a code for html web page which displays your name in left, college name in right, and semester in center, your branch in red background color and text size - 50px.' => '22017C04069_6.php',

    'Write a code for html webpage which displays your name in < h1> tag and also in blue color and < p> tag uses purple background color.' => '22017C04069_7.php',

    'Write a code for html webpage which displays some text formatting and uses < em>, < i>, < small>, < b>, < strong>, < sup>, < sub>, < ins>, < del> and < mark> tag.' => '22017C04069_8.php',

    'Write a code for html webpage which displays some background color and text of red colour.' => '22017C04069_9.php',

    'Write a CSS file and attached to any 3 html webpage.' => [
        'Page 1st' => '22017C04069_10.php?q=1',
        'Page 2nd' => '22017C04069_10.php?q=2',
        'Page 3rd' => '22017C04069_10.php?q=3',
    ],

    'Write a code for html webpage which displays Virat Kohli image as background.' => '22017C04069_11.php',

    'Write a code for html webpage which displays table using < tr> and < td> tag.' => '22017C04069_12.php',

    'Make a form in html web page which takes all the details of person.' => '22017C04069_13.php',

    'Make a form in html web page which takes all the details of person.(Ex - Name, Password, Age, Date of Birth, Month of Admission, Year of 10 Passed, Gender, Qualification, Select Branch, Category (SC/ST/Gen/OBC) using data list, Select Color, Select Range (0 to 100), Submit button).' => '22017C04069_14.php',

    'Write a code for html webpage which displays a list.' => '22017C04069_15.php',

    'Use Class, ID selectors to style various elements of HTML Page.Ex: create four < p> and four < h1> element.Center align two < p> and two < h1> using Class.Colour all < p> to blue using class.Last < h1> should colour in yellow using id.' => '22017C04069_16.php',

    'Use Div and span in a page and color two words with same colors.' => '22017C04069_17.php',

    'Write a code for html webpage which displays background.' => [
        'Background Color' => '22017C04069_18.php?q=1',
        'Background Image' => '22017C04069_18.php?q=2',
        'Background Repeat' => '22017C04069_18.php?q=3',
        'Background Attachment' => '22017C04069_18.php?q=4',
        'Background Position' => '22017C04069_18.php?q=5',
    ],

    'Write a code for html webpage which displays all practical on Border , Margin , Padding of elements.' => '22017C04069_19.php',

    'Write a code for html webpage which displays all practical on Text/font formatting, width-Height.' => '22017C04069_20.php',

    'Write a program to print hello in HTML using body tag?' => '22017C04069_21.php',

    'Write a program to print information about yourself by using paragraph heading tag?' => '22017C04069_22.php',

    'Write a program to print a paragraph with comment line in HTML?' => '22017C04069_23.php',

    'Write a program to make a use of <br> tag in HTML?' => '22017C04069_24.php',

    'Write a program to insert an image with its height width in HTML?' => '22017C04069_25.php',

    'Write a program to print welcome to the polytechnic college with different heading tag?' => '22017C04069_26.php',

    'Write a program to print formula using different formatting tag (<b>,< strong >,< i >,<em>,< mark >,<small >, < sub >,< sup > ?' => '22017C04069_27.php',

    'Write a program to make hyperlink to the particular text?' => '22017C04069_28.php',

    'Write a program to change the background of a webpage?' => '22017C04069_29.php',

    'Write a program to make use of picture tag in HTML?' => '22017C04069_30.php',

    'Write a program to make an order list in HTML?' => '22017C04069_31.php',

    'Write a program to make an un-order list in HTML?' => '22017C04069_32.php',

    'Write a program to make use of a div tag in HTML?' => '22017C04069_33.php',

    'Write a program to a code for HTML webpage which display table using TR and TD Tag?' => '22017C04069_34.php',

    'Write a program to make the use of attributes in class in HTML?' => '22017C04069_35.php',

    'Write a program to make a use of iframe in HTML?' => '22017C04069_36.php',

    'Write a program to use script to print hello in HTML?' => '22017C04069_37.php',

    'Write a program to insert a picture by given its part in HTML?' => '22017C04069_38.php',

    'Write a program to use a different HTML Semantics Element?' => '22017C04069_39.php',

    'Write a program to insert in an emojis?' => '22017C04069_40.php',

    'Write a program to make a use of form tag?' => '22017C04069_41.php',

    'Write a program to make an input tag?' => '22017C04069_42.php',

    'Write a program to make an output tag?' => '22017C04069_43.php',

    'Write a program to make a use of input type tab in HTML?' => '22017C04069_44.php',

    'Write a program to make a SVG in HTML?' => '22017C04069_45.php',

    'Write a program to make the use of selectors element in CSS?' => '22017C04069_46.php',

    'Write a program to make a use of text of element colour property of the text in Style Tag?' => '22017C04069_47.php',

    'Write a program to the background colour in CSS?' => '22017C04069_48.php',

    'Write a program to make the create a border and change in different properties using CSS?' => '22017C04069_49.php',

    'Write a program to demonstrate box model in CSS?' => '22017C04069_50.php',

    'Write a program to make a use of margin in CSS?' => '22017C04069_51.php',

    'Write a program to align image filling include in CSS?' => '22017C04069_52.php',

    'Write a program to set the colour, align list in CSS?' => [
        'Part 1st:-' => '22017C04069_53.php?q=1',
        'Part 2nd:-' => '22017C04069_53.php?q=2',
    ],

    'Write a program to do text decoration in CSS?' => '22017C04069_54.php',

    'Write a program to indentation different spacing b/w text words?' => '22017C04069_55.php',

    'Write a program to transform the text in different CSS?' => '22017C04069_56.php',

    'Write a program to implement text in shadow in CSS?' => '22017C04069_57.php',

    'Write a program to make the different font style in CSS?' => '22017C04069_58.php',

    'Write a program to make a different icon in a CSS?' => '22017C04069_59.php',

    'Write a program to make an image gallery in a CSS?' => '22017C04069_60.php',

    'Write a program to make CSS buttons?' => '22017C04069_61.php',
];
// print_r($question_and_file);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Of Practical</title>
    <link rel="shortcut icon" href="https://cdn4.iconfinder.com/data/icons/global-logistics-3/512/104-512.png"
        type="image/x-icon">
    <link rel="icon" href="https://cdn4.iconfinder.com/data/icons/global-logistics-3/512/104-512.png"
        type="image/x-icon">
    <!-- <link rel="apple-touch-icon" href="https://cdn4.iconfinder.com/data/icons/global-logistics-3/512/104-512.png"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <style>
        #index-table {
            width: 100%;
            overflow-x: auto;
            display: block;
        }

        @media only screen and (min-width: 600px) {
            h3.showOnMobile {
                display: none;
            }
        }
        #user-title{
            width: 5rem;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <a href="https://www.polygwalior.ac.in/student/22017C04069.php">
        <img id="college-image" src="<?php include '22BRACS04.php'; ?>" alt="College image" width="100%" height="100%">
    </a>
    <!-- <div class="modal show" id="welcome" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-lg btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h4 class="fw-bold text-center display-2 thank">Welcome</h4>
                </div>
                <br>
            </div>
        </div>
    </div> -->

    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="ask-name" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-black">
                <div class="modal-header bg-info-subtle">
                    <h1 class="modal-title" id="exampleModalLabel">Welcome!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-cross"></button>
                </div>
                <div class="modal-body">
                    <label class="h4" for="user-name">Enter Your Name: </label>
                    <div class="input-group">
                        <select class="form-group bg-secondary-subtle rounded-start border-secondary" id="user-title" placeholder="Choose a title">
                            <optgroup class="bg-light" label="Select Your Title">
                                <option value="" >Null</option>
                                <option selected value=" Mr." >Mr.</option>
                                <option value=" Mrs." >Mrs.</option>
                                <option value=" Miss" >Miss</option>
                                <option value=" Sir" >Sir</option>
                                <option value=" Madam" >Madam</option>
                            </optgroup>
                        </select>  
                        <input type="text" class="form-control border-secondary" id="user-name" maxlength="50" placeholder='e.g., "Vaibhav Bansal" (Whitespace should be proper.)' title='e.g., "Vaibhav Bansal" (Whitespace should be proper.)' required>
                    </div>
                    <p class="pt-4">
                        <b>
                            Note:
                        </b>
                        Name will be stored in local session storage not in database
                    </p>
                </div>
                <div class="modal-footer bg-warning-subtle">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal" id="close-btn">Close</button>
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal" id="save-name">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header bg-success-subtle">
                    <h1 class="modal-title fs-5" id="exampleModalFullscreenLabel">Page Preview</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="" width="100%" height="100%" frameborder="1" style="border:1px solid black;"
                        id="preview-frame"></iframe>
                </div>
                <div class="modal-footer bg-success-subtle">
                    <a href="" id="new-tab-opener" target="_blank" class="btn btn-secondary">Open in new tab</a>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-2">

        <div class="h1 ps-4 pb-2 mb-4 text-black border-bottom border-4 border-secondary" style="color:black">
            <span class="" id="change-title"></span>
        </div>
        <div class="table-responsive">
            <div class="d-flex align-content-stretch flex-wrap">
            </div>
            <table class="border border-3 border-dark table table-striped-columns table-hover" id="index-table">

                <thead class="table-info">
                    <tr>
                        <th> S.No. </th>
                        <th> Question </th>
                        <th colspan="2"> Action </th>
                    </tr>
                    <!-- <th> Action </th> -->
                    <!-- <th></th> -->
                    <tr style="display: none;">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                </thead>
                <tbody class="table-striped-columns">
                    <?php
                    $i = 0;
                    foreach ($question_and_file as $ques => $page) {
                        if (gettype($page) == 'string') {
                    ?>
                    <tr>
                        <th>
                            <?php echo ++$i . "."; ?>
                        </th>
                        <td>
                            <?php echo htmlspecialchars($ques); ?>
                        </td>
                        <td>
                            <a href="<?php echo $page; ?>" target="_blank" rel="noopener noreferrer"
                                class="btn btn-outline-dark">
                                Open
                            </a>
                        </td>
                        <td>
                            <button type="button" class="which-page-preview btn btn-outline-success"
                                value="<?php echo $page; ?>" data-bs-toggle="modal"
                                data-bs-target="#exampleModalFullscreen">Preview</button>
                        </td>
                    </tr>
                    <?php
                        } else if (is_array($page)) {

                            $link = "";
                            $btn = "";
                            $ques_in_part = htmlspecialchars($ques);
                            foreach ($page as $for_what => $what_page) {

                                $ques_in_part .= "<br>\n<br>" . $for_what;
                                $link .= "<a href='$what_page' target='_blank' rel='noopener noreferrer'
                                        class='btn btn-outline-dark mt-3'>
                                        Open
                                    </a>
                                    <br>";
                                $btn .= "<button type='button' class='which-page-preview btn btn-outline-success mt-3' value='$what_page' data-bs-toggle='modal' data-bs-target='#exampleModalFullscreen'>Preview</button>
                                    <br>";
                            }
                    ?>
                    <tr>
                        <th>
                            <?php echo ++$i . "."; ?>
                        </th>
                        <td>
                            <?php echo $ques_in_part; ?>
                        </td>
                        <td>
                            <?php echo $link; ?>
                        </td>
                        <td>
                            <?php echo $btn; ?>
                        </td>
                    </tr>
                    <?php
                        } else {
                            echo "error";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- <div>
            <h4 class="ps-2 pb-2 text-black">
                Vaibhav Bansal 
                (22017C04069)
            </h4>
        </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
        const closeCross = document.getElementById('close-cross');
        const closeBtn = document.getElementById('close-btn');
        closeCross.addEventListener('click', e => greetWithName(null) );
        closeBtn.addEventListener('click', e => greetWithName(null) );

        const getGreeting = () => {
            const now = new Date();
            const hour = now.getHours();
            if (hour >= 6 && hour < 12) {
                return 'Good ^70Mo^50rning';
            } else if (hour >= 12 && hour < 17) {
                return 'Good ^70After^50noon';
            } else if (hour >= 17 && hour < 22) {
                return 'Good ^70Eve^50ning';
            } else {
                return 'Good ^70Ni^50ght';
            }
        }

        const greetWithName = (name) => {
            const userTitle = document.getElementById("user-title").value;
            nameWithSpace = name === null ? "" : userTitle + " " + name ;
            let typed = new Typed('#change-title', {
                strings: [`${getGreeting()}${nameWithSpace}!!`, " I'm Vaib^50hav Ban^100sal!", " List Of ^150Practical",],
                startDelay: 0,
                backSpeed: 70,
                backDelay: 2000,
                typeSpeed: 60,
                smartBackspace: true,
                loop: true,
                loopCount: Infinity,
                cursorChar: '_',
            });
        }
        
        const nameNotSaved = (sessionStorage.getItem("name") === null) ? true : false;
        if (nameNotSaved) {
            document.addEventListener('DOMContentLoaded', (event) => {
                var myModal = new bootstrap.Modal(document.getElementById('ask-name'), {
                    keyboard: false,
                    backdrop: 'static'
                });
                myModal.show();
            });

            const saveName = document.getElementById("save-name");
            const nameField = document.getElementById("user-name");
            nameField.addEventListener("keyup", e => {
                if(e.key == "Enter"){
                    document.querySelector("#save-name").click();
                }
            });


            saveName.addEventListener("click", e => {
                let userName = document.getElementById("user-name").value;
                if (userName != "" && userName != null && userName[0] != " " && userName.at(-1) != " " && !userName.includes("  ")) {

                    let nameArray = userName.split(" ");
                    nameArray.forEach((word, index, arr) => {
                        arr[index] = word[0].toUpperCase() + word.slice(1).toLowerCase();
                    });
                    const properFormatName = nameArray.join(" ");
                    sessionStorage.setItem("name", properFormatName);
                    greetWithName(properFormatName);

                } else {
                    swal({
                        title: "Invalid Whitespace or Null Value",
                        text: "You have entered invalid whitespace or a null value in the name field.\n\n Please try again by refreshing the page.",
                        icon: "warning",
                    });

                    greetWithName(null);
                }
            });

        } else {
            const name = sessionStorage.getItem("name");

            greetWithName(name);
        }
    </script>

    <script>
        const previewBtn = document.getElementsByClassName('which-page-preview');
        const previewFrame = document.getElementById('preview-frame');
        const openNewTab = document.getElementById('new-tab-opener');
        const previewTxt = document.getElementById('exampleModalFullscreenLabel');
        const previewPath = location.href;
        
        for (let i = 0; i < previewBtn.length; i++) {
            previewBtn[i].addEventListener('click', (event) => {
                previewFrame.src = event.target.value;
                openNewTab.href = event.target.value;
                // previewTxt.innerText = `Preview of page ${previewPath.slice(0, previewPath.search('22017'))}${event.target.value}`;
                previewTxt.innerText = `${event.target.parentElement.parentElement.querySelectorAll('td')[0].innerText.replaceAll('\n\n', ' ')}`;
            });
        }
        // const tableSearch = () =>{
        // $('#index-table').DataTable({
        // responsive: true
        // });
        let table = new DataTable('#index-table');
        let search = document.getElementById("dt-search-0");
        let limit = document.getElementById("dt-length-0");
        search.classList.add('m-2', 'ms-3');
        limit.classList.add('m-2', 'me-3');
        search.placeholder = "Search";
        // table = table.DataTable({
        // responsive: true
        // });

        // };
        // tableSearch();
        // window.addEventListener('orientationchange',tableSearch);
    </script>

</body>

</html>
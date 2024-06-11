<html>
    <head>
        <title>Calendar</title>
        <link rel="icon" href="https://www.svgrepo.com/show/513279/calendar.svg" type="image/x-icon">
        <link rel="shortcut" href="https://www.svgrepo.com/show/513279/calendar.svg" type="image/x-icon">
        <link rel="shortcut icon" href="https://www.svgrepo.com/show/513279/calendar.svg" type="image/x-icon">    
        <link rel="stylesheet" href="style.css">
        <style>
            table{
                padding: 10px;
                border: solid rgb(7, 7, 7);
            }
            .dates{
                /* border: solid; */
                border: 1px solid;
                padding: 10px;
                height: 20px;
                /* width: 20px; */
            }
            .days{
                padding: 12px;
                border: solid;
                margin: 2px;
            }
            #dyn_date{
                display: none;
            }
            header{
                display: flex;
            }
            #fullmonth {
                margin-left: 8px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1 id="fullyear">
                0000
            </h1>
            <h1 id="fullmonth">
                XXX
            </h1>
        </header>
        <div>
            <button onclick="render(aa=aa-1)" id="pre"> Pervious month </button>
            <button onclick="render(aa=aa+1)" id="nxt"> Next month </button>
        </div>
        <br><br>
        <table>
            <thead>
                <tr >
                    <th class="days">
                        Sun
                    </th>
                    <th class="days">
                        Mon
                    </th>
                    <th class="days">
                        Tue
                    </th>
                    <th class="days">
                        Wed
                    </th>
                    <th class="days">
                        Thu
                    </th>
                    <th class="days">
                        Fri
                    </th>
                    <th class="days">
                        Sat
                    </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
            </tr>
            <tr>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
            </tr>
            <tr>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
            </tr>
            <tr>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
            </tr>
            <tr>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
            </tr>
            <tr id="dyn_date">
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
                <td class="dates"></td>
            </tr>
        </tbody>
    </table>
    <script>
        let aa = 1
        function render(date_increment){
        let month = new Date().getMonth() + date_increment;
        let current = new Date().getFullYear();
        // let year = new Date(current,month).getFullYear() ;
        let lastDayOfMonth = new Date(current, month, 0);
        let firstDayOfMonth = new Date(current, month-1, 1);
        let max_date = lastDayOfMonth.getDate()
        let start_day = firstDayOfMonth.getDay()
        // console.log('month',month);
        // console.log('current',current)
        // console.log('year',year)
        // console.log('lastDayOfMonth',lastDayOfMonth)
        // console.log('firstDayOfMonth',firstDayOfMonth);
        // console.log('max_date',max_date);
        // console.log('start_day',start_day);
        if( start_day >= 5 && max_date === 31){
            let last_row = document.getElementById('dyn_date');
            last_row.style.display="contents";
        }
        else if(start_day > 5 && max_date === 30){
            let last_row = document.getElementById('dyn_date');
            last_row.style.display="contents";
        }
        else{
            let last_row = document.getElementById('dyn_date');
            last_row.style.display="none";
        }
        let a = document.getElementsByClassName("dates");
        k = 1;
        for (let i = 0; i <= 41; i++) {
            a[i].innerText = "";
        }
        for (let i = start_day; i <= 41; i++) {
            if (k <= max_date){
                a[i].innerText = k++;
            }
        }
        let months_name = {
            11 : "Dec",
            10 : "Nov",
            9 : "Oct",
            8 : "Sep",
            7 : "Aug",
            6 : "Jul",
            5 : "Jun",
            4 : "May",
            3 : "Apr",
            2 : "Mar",
            1 : "Fab",
            0 : "Jan"
        }
        // console.log(lastDayOfMonth.getFullYear())
        document.getElementById('fullyear').innerText = lastDayOfMonth.getFullYear()
        document.getElementById('fullmonth').innerText = months_name[firstDayOfMonth.getMonth() % 12]
        }
        render(aa);
    </script>
</body>
</html>
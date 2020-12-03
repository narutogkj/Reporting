let startDateinput = document.querySelector('#startDate');
let endDateinput = document.querySelector('#endDate');
let productlist = document.querySelector('#productlist')
let storelist = document.querySelector('#storelist');
let storeListArray = [];
let listOfProductAndCount = {};
let listOfStore = []
let labelArray = [];
let dataArray = [];
let colorSet = [];
var ctx;
var myChart;
let startDate = 1543602590000;
let endDate = 1543602590000;


//Query Checker
let queryParamsString = (window.location.search).replace('?', '').split("&");
let queryParamsObject = {}
for (i = 0; i < queryParamsString.length; i++) {
    queryParamsObject[queryParamsString[i].split('=')[0]] = queryParamsString[i].split('=')[1]
}
if (queryParamsObject.success == 'true') {
    alert('File Uploaded Successfully')
}




//genrate rendom colors for chart
function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return (color);
}


//formate date 
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [year, month, day].join('-');
}



function displayData(storeListArray, productlistArray) {
    axios.get(`http://localhost:3000/api/report/salesTrendReport`).then((res) => {
        let data = res.data.data
        if (storeListArray) {
            document.getElementById('myChart1').innerHTML = '';
            listOfProductAndCount = [];
            labelArray = [];
            colorSet = [];
            dataArray = [];
            ctx = '';
            myChart = '';
            data.map(e => {
                let productDesc = e.Product_Desc
                let Store = e.Store
                if (!listOfStore.includes(Store)) {
                    listOfStore.push(Store)
                    storelist.innerHTML += `<li class="list-group-item">
                                            <input type="checkbox" class="form-check-input" name="storeList" id='${Store.replace(" ", "-")}'>${Store}
                                        </li>`;
                }
                if (storeListArray.includes(Store) && e.Trans_Date_Time >= Date.parse(startDateinput.value) && e.Trans_Date_Time <= Date.parse(endDateinput.value)) {
                    if (!listOfProductAndCount.hasOwnProperty(productDesc)) {
                        listOfProductAndCount[productDesc] = 1
                        labelArray.push(productDesc)
                    } else {
                        listOfProductAndCount[productDesc]++
                    }
                    console.log(e)
                }
            })
            labelArray.map(e => {
                dataArray.push(listOfProductAndCount[e])
                productlist.innerHTML += `<li class="list-group-item">
                                <input type="checkbox" class="form-check-input" name='productListcheckBox' id="${e.replace(" ", "-")}">${e}
                            </li>`;
            })
            let newdataArray = [];
            let newProductArray = [];
            for (i = 0; i < labelArray.length; i++) {
                if (productlistArray.includes(labelArray[i])) {
                    newdataArray.push(dataArray[i])
                    newProductArray.push(labelArray[i])
                    colorSet.push(getRandomColor())
                }
            }
            console.log(newProductArray, newdataArray, colorSet)
            barChart(newProductArray, newdataArray, colorSet)
        } else {
            data.map(e => {
                let productDesc = e.Product_Desc
                let Store = e.Store

                if (startDate > e.Trans_Date_Time) startDate = e.Trans_Date_Time;
                if (endDate < e.Trans_Date_Time) endDate = e.Trans_Date_Time;
                if (!listOfStore.includes(Store)) {
                    listOfStore.push(Store)
                    storelist.innerHTML += `<li class="list-group-item">
                                            <input type="checkbox" class="form-check-input" name="storeList" id='${Store.replace(" ", "-")}'>${Store}
                                        </li>`;
                }

                if (!listOfProductAndCount.hasOwnProperty(productDesc)) {
                    listOfProductAndCount[productDesc] = 1
                    labelArray.push(productDesc)
                    colorSet.push(getRandomColor())
                } else {
                    listOfProductAndCount[productDesc]++
                }
            })
            labelArray.map(e => {
                dataArray.push(listOfProductAndCount[e])
                productlist.innerHTML += `<li class="list-group-item">
            <input type="checkbox" name="productListcheckBox" class="form-check-input" id='${e.replace(" ", "-")}'>${e}</li>`;
            })
            startDateinput.value = formatDate(parseInt(startDate));
            endDateinput.value = formatDate(parseInt(endDate))
            barChart(labelArray, dataArray, colorSet)
        }
    })
}


function barChart(labelArray, dataArray, colorSet) {
    ctx = document.getElementById('myChart1').getContext('2d');
    myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: labelArray,
            datasets: [{
                label: 'Sales Trend',
                data: dataArray,
                backgroundColor: colorSet
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}


function filterButton() {
    storeListArray = [];
    productlistArray = [];
    var checkboxes1 = document.getElementsByName('productListcheckBox');
    for (var checkbox1 of checkboxes1) {
        if (checkbox1.checked) {
            productlistArray.push(checkbox1.id.replace('-', ' '));
        }
    }
    var checkboxes = document.getElementsByName('storeList');
    for (var checkbox of checkboxes) {
        if (checkbox.checked) storeListArray.push(checkbox.id)
    }
    displayData(storeListArray, productlistArray)
}

displayData(undefined, undefined);


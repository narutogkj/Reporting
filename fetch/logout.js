if (localStorage.getItem('admin') == 'true') {
    let uploadButtonInHeader = document.querySelector('#uploadButtonInHeader');
    uploadButtonInHeader.innerHTML = `<li>
    <span class="caret caret-margin-top">
        <span class="h-g"><a href="uploadfile.php">Upload New Report</a></span>
    </span>
    </li>
    `;

    let createEmployeebutton = document.querySelector('#createEmployeebutton');
    createEmployeebutton.innerHTML = `<a class="dropdown-item" href="creatClient.php"><i class="fa fa-lock m-r-5 text-muted"></i>Clients</a>`;

} else {
    console.log('client')
}




let logoutButton = document.querySelector('#logoutButton');

logoutButton.addEventListener('click', e => {
    console.log('logout')
    localStorage.removeItem('token')
    localStorage.removeItem('userName')
    localStorage.removeItem('password')

    window.location.replace(`index.php`)
})
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
<form id="form" encType="multipart/form-data" action="">
    <input id="inputFeild" type="file" name="file" />
    <input type="submit" name="upload" />
</form>


<script>
    let form = document.querySelector('#form')
    let progressBar = function (progressEvent) {
        var percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total)
        console.log(percentCompleted)
    }

    form.addEventListener('submit', e => {
        e.preventDefault()
        let inputFeild = document.querySelector('#inputFeild')
        let formData = new FormData();
        formData.append("image", inputFeild.files[0]);
        formData.append("other", "abs");
        axios.post('http://localhost:3000/api/image', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            },
            onUploadProgress: progressBar
        }).then(data => console.log(data.data))

    })


</script>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.tiny.cloud/1/ynxyrgwc5cz2r1acqpd77e1o0wdf719f0hjsdsh1i44d07w1/tinymce/5/tinymce.min.js"></script>

    <style>
        body {
            text-align: center;
        }
        
        div#editor {
            margin: auto;
            text-align: left;
        }
        
        .ss {
            background-color: red;
        }
    </style>
</head>

<body>

    <div id="editor">
        <textarea style="margin-top: 30px;" name="question_body">
        <h1>Full Featured</h1>

        <p>This is the full featured Froala WYSIWYG HTML editor.</p>

        Lorem  <strong>ipsum</strong> dolor sit amet, consectetur <strong>adipiscing <em>elit.</em> Donec</strong> facilisis diam in odio iaculis blandit. Nunc eu mauris sit amet purus <strong>viverra</strong><em> gravida</em> ut a dui.<br/>
        <ul><li>Vivamus nec rutrum augue, pharetra faucibus purus. Maecenas non orci sagittis, </li> <li>Suspendisse suscipit, Pellentesque imperdiet mollis libero.</li></ol></li>
        </ul>
       </textarea>
    </div>



    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste tinycomments tinydrive tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter insertfile pageembed permanentpen',
            toolbar_drawer: 'floating',
            height: '300px',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            branding: false
        });
    </script>
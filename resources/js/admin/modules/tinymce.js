tinymce.init({
    selector: 'textarea',
    content_style: ".mce-content-body {font-size:0.9em;}",
    language: locale,
    plugins: ['lists', 'code'],
    menubar: false,
    /*valid_elements: "@[id|class|title|style],"
        + "a[name|href|target|title|alt],"
        + "#p,-ol,-ul,-li,br,img[src|unselectable],-sub,-sup,-b,-i,-u,"
        + "-span[data-mce-type],hr",

    valid_child_elements : "body[p,ol,ul]"
        + ",p[a|span|b|i|u|sup|sub|img|hr|#text]"
        + ",span[a|b|i|u|sup|sub|img|#text]"
        + ",a[span|b|i|u|sup|sub|img|#text]"
        + ",b[span|a|i|u|sup|sub|img|#text]"
        + ",i[span|a|b|u|sup|sub|img|#text]"
        + ",sup[span|a|i|b|u|sub|img|#text]"
        + ",sub[span|a|i|b|u|sup|img|#text]"
        + ",li[span|a|b|i|u|sup|sub|img|ol|ul|#text]"
        + ",ol[li]"
        + ",ul[li]",*/
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | code',
});

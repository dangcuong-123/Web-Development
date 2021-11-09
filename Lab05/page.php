<?php
class Page
{
    private $page, $title, $year, $copyright;

    function __construct($title, $year, $copyright)
    {
        $this->page = '';
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
        $this->addHeader();
    }

    private function addHeader()
    {
        $this->page .= <<<EOD
        <html lang="en">

        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8">
            <link href="style1.css" rel="stylesheet">
            <h2>$this->title</h2>
        </head>
        <body>
EOD;
    }

    public function addContent($content)
    {
        $this->page .= $content;
    }

    private function addFooter()
    {
        $this->page .= <<<EOD
        
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
        <div class="footer" align="center">&copy; $this->year $this->copyright</div>
    
    </html>
EOD;
    }
    //Get the contents of the page
    //When we come to fetch the finished page, the footer is added automatically.
    public function get()
    {
        //Keep a copy of $page with no footer
        $temp = $this->page;
        $this->addFooter();
        //Restore $page for the next call to get
        $page = $this->page;
        $this->page = $temp;
        return $page;
        //if not needed, use $this->addFooter(); return $this->page;
    }
}

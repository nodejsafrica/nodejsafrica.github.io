<?php
    global $text, $maxchar, $end;
    function substrwords($text, $maxchar, $end='...') {
        if (strlen($text) > $maxchar || $text == '') {
            $words = preg_split('/\s/', $text);
            $output = '';
            $i      = 0;
            while (1) {
                $length = strlen($output)+strlen($words[$i]);
                if ($length > $maxchar) {
                    break;
                } else {
                    $output .= " " . $words[$i];
                    ++$i;
                }
            }
            $output .= $end;
        } else {
            $output = $text;
        }
        return $output;
    }

    $rss = new DOMDocument();
    $rss->load('https://foundation.nodejs.org/feed'); // <-- Change feed to your site
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = array (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
        );
        array_push($feed, $item);
    }

    $limit = 6; // <-- Change the number of posts shown
    for ($x=0; $x<$limit; $x++) {
        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
        $title = substrwords($title, 60);
        $link = $feed[$x]['link'];
        $description = $feed[$x]['desc'];
        $description = substrwords($description, 70);
        $date = date('l F d, Y', strtotime($feed[$x]['date']));
        echo '<div class="col-md-4">
                <div class="card">
                  <div class="card-body post">
                    <div class="col-md-12 post-author-name">
                      <a id="news-link" href="'.$link.'" target="_blank">'.$title.'</a>
                      </div>
                    <div class="col-md-12 post-date">'.$date.'
                    </div>
                  </div>
                </div>
              </div>';
            }
            ?>

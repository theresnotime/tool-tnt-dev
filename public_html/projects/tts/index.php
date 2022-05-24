<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
$data = json_decode(file_get_contents(__DIR__ . '/static/data.json'), true);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:~/tool-tnt-dev$ cd /projects/tts</title>
    <link href="https://tools-static.wmflabs.org/cdnjs/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/howler/2.2.3/howler.min.js"></script>
    <script src="js/tts.js"></script>
    <style>
        .listen-icon {
            width: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mx-auto p-3 py-md-5">
            <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="32" viewBox="0 0 118 94" role="img">
                        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 45" class="me-2" style="enable-background:new 0 0 45 45;"
                            xml:space="preserve" version="1.1" id="svg2">
                            <defs id="defs6">
                                <clipPath id="clipPath16" clipPathUnits="userSpaceOnUse">
                                    <path id="path18" d="M 0,36 36,36 36,0 0,0 0,36 Z" />
                                </clipPath>
                            </defs>
                            <g transform="matrix(1.25,0,0,-1.25,0,45)" id="g10">
                                <g id="g12">
                                    <g clip-path="url(#clipPath16)" id="g14">
                                        <g transform="translate(13.4312,26.1982)" id="g20">
                                            <path id="path22"
                                                style="fill:#f4900c;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 c 0.658,-2.639 0.176,-4.879 -2.462,-5.536 -2.64,-0.657 -6.211,-4.953 -8.782,1.438 -1.491,3.703 -2.793,11.466 -1.313,11.834 C -11.077,8.105 -0.657,2.639 0,0" />
                                        </g>
                                        <g transform="translate(11.437,25.645)" id="g24">
                                            <path id="path26"
                                                style="fill:#a0041e;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 c 0.961,-1.538 -1.831,-4.561 -3.368,-5.521 -1.538,-0.962 -2.9,0.551 -4.414,4.414 C -8.444,0.581 -9.448,5.162 -8.885,5.514 -8.323,5.865 -0.961,1.538 0,0" />
                                        </g>
                                        <g transform="translate(22.5566,26.1982)" id="g28">
                                            <path id="path30"
                                                style="fill:#f4900c;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 c -0.657,-2.639 -0.177,-4.879 2.463,-5.536 2.64,-0.657 6.21,-4.953 8.782,1.438 1.49,3.703 2.792,11.466 1.313,11.834 C 11.077,8.105 0.658,2.639 0,0" />
                                        </g>
                                        <g transform="translate(24.5518,25.645)" id="g32">
                                            <path id="path34"
                                                style="fill:#a0041e;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="M 0,0 C -0.96,-1.538 1.831,-4.561 3.368,-5.521 4.905,-6.483 6.267,-4.97 7.781,-1.107 8.443,0.581 9.447,5.162 8.886,5.514 8.322,5.865 0.961,1.538 0,0" />
                                        </g>
                                        <g transform="translate(18.001,26.7446)" id="g36">
                                            <path id="path38"
                                                style="fill:#f4900c;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 c -6.622,2.208 -11.471,-1.974 -15.449,-9.932 l 2.206,0 c 0,0 -2.206,-2.206 -3.31,-5.517 2.207,1.104 3.31,1.104 3.31,1.104 0,0 -1.103,-2.208 -1.103,-3.312 3.31,2.208 6.621,2.208 8.828,-1.102 2.207,-3.311 5.518,0 5.518,4.414 L 0,0 Z" />
                                        </g>
                                        <g transform="translate(18.001,26.7446)" id="g40">
                                            <path id="path42"
                                                style="fill:#f4900c;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 c 6.621,2.208 11.471,-1.974 15.448,-9.932 l -2.206,0 c 0,0 2.206,-2.206 3.31,-5.517 -2.206,1.104 -3.31,1.104 -3.31,1.104 0,0 1.104,-2.208 1.104,-3.312 -3.312,2.208 -6.621,2.208 -8.828,-1.102 C 3.309,-22.07 0,-18.759 0,-14.345 L 0,0 Z" />
                                        </g>
                                        <g transform="translate(18.001,27.7104)" id="g44">
                                            <path id="path46"
                                                style="fill:#f4900c;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 0,0 -0.002,0 -0.001,0 c -11.334,-0.001 -9.605,-4.369 -8.39,-11.632 1.214,-7.266 2.65,-12.421 8.393,-12.421 5.741,0 7.175,5.155 8.391,12.421 C 9.604,-4.369 11.332,-0.001 0,0" />
                                        </g>
                                        <g transform="translate(34.709,9.958)" id="g48">
                                            <path id="path50"
                                                style="fill:#f18f26;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 c -0.084,5.708 -9.301,3.745 -10.087,2.972 -1.103,-1.084 -1.107,-7.705 -6.623,-7.705 -5.516,0 -6.62,6.621 -7.723,7.705 -0.787,0.773 -9.234,1.403 -9.026,-2.972 2.207,1.103 3.508,0.784 3.508,0.784 0,0 -1.425,-0.826 -1.216,-2.784 3.208,1.458 4.708,1.25 6.458,0.375 1.213,-3.623 4.206,-6.333 8.001,-6.333 3.793,0 6.746,2.794 7.958,6.416 1.458,1.25 3.708,0.875 6.416,-0.416 0.292,1.833 -1.132,2.742 -1.132,2.742 0,0 1.26,0.319 3.466,-0.784" />
                                        </g>
                                        <g transform="translate(34.5527,11.2959)" id="g52">
                                            <path id="path54"
                                                style="fill:#ffd983;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 c -0.904,2.718 -9.145,4.064 -9.931,3.291 -1.103,-1.084 -1.107,-7.705 -6.623,-7.705 -5.516,0 -6.619,6.621 -7.723,7.705 -0.787,0.773 -7.922,-0.573 -8.828,-3.291 2.207,1.104 3.311,1.104 3.311,1.104 0,0 -1.104,-2.208 -1.104,-3.312 2.67,1.78 5.339,2.122 7.429,0.452 1.214,-3.623 3.122,-5.883 6.917,-5.883 3.793,0 5.7,2.259 6.912,5.881 2.092,1.673 4.763,1.33 7.434,-0.45 0,1.104 -1.104,3.312 -1.104,3.312 0,0 1.104,0 3.31,-1.104" />
                                        </g>
                                        <g transform="translate(11,19)" id="g56">
                                            <path id="path58"
                                                style="fill:#272b2b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="M 0,0 C 0,0 0,1.5 1.5,1.5 3,1.5 3,0 3,0 L 3,-1.5 C 3,-1.5 3,-3 1.5,-3 0,-3 0,-1.5 0,-1.5 L 0,0 Z" />
                                        </g>
                                        <g transform="translate(22,19)" id="g60">
                                            <path id="path62"
                                                style="fill:#272b2b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="M 0,0 C 0,0 0,1.5 1.5,1.5 3,1.5 3,0 3,0 L 3,-1.5 C 3,-1.5 3,-3 1.5,-3 0,-3 0,-1.5 0,-1.5 L 0,0 Z" />
                                        </g>
                                        <g transform="translate(14.939,8.1924)" id="g64">
                                            <path id="path66"
                                                style="fill:#272b2b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                                d="m 0,0 c -1.02,-0.208 2.041,-3.968 3.062,-3.968 1.02,0 4.082,3.76 3.062,3.968 C 5.103,0.208 1.021,0.208 0,0" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </svg>
                    <span class="fs-4">:~/tool-tnt-dev$ cd /projects/tts</span>
                </a>
            </header>

            <main>
                <h1>TTS Engine Demo</h1>
                <p class="fs-5 col-md-8">See <a
                        href="https://meta.wikimedia.org/wiki/Community_Wishlist_Survey_2022/Reading/IPA_audio_renderer/TTS_investigation"
                        target="_blank">TTS investigation</a> on Meta for more information</p>

                <div class="mb-4 mt-1">
                    <a href="https://github.com/theresnotime/tool-tnt-dev" target="_blank"
                        class="btn btn-primary btn-lg px-4">GitHub Repo</a>
                </div>

                <hr class="col-3 col-md-2 mb-3">

                <h2>Corpus</h2>
                <p class="fs-5 col-md-8">A <a href="static/data.json" target="_blank"><?= count($data['corpus']); ?> word corpus</a> was chosen by the <a href="https://meta.wikimedia.org/wiki/Community_Tech" target="_blank">Community Tech team</a> to test the TTS engines against.</p>

                <hr class="col-3 col-md-2 mb-3">

                <h2>Results</h2>
                <p class="fs-5 col-md-8">Work In Progress — columns will appear once the audio samples have completed</p>

                <h3>Known issues</h3>
                <ul>
                    <li>Some of Azure's outputs are missing, as it didn't recognise some of the IPA unicode</li>
                    <li>larynx's output needs significant tweaking to make it useful (i.e. some of the outputs below sound <i>nothing</i> like they should, mainly due to the use of IPA it doesn't understand.)</li>
                </ul>

                <div class="table-responsive">
                    <table class="table align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th class="text-start">Word</th>
                                <th class="text-start">Language</th>
                            <?php
                            foreach($data['engines'] as $engine) {
                                if($engine['status'] > 0) {
                                    $name = $engine['name'];
                            ?>
                                <th data-engine="<?= $name; ?>" data-ext="<?= $engine['ext']; ?>" data-engine-dir="<?= $engine['dir']; ?>"
                                    data-engine-status="<?= $engine['status']; ?>"><a href="<?= $engine['link']; ?>"
                                        target="_blank"><?= $name; ?></a></th>
                            <?php
                                }
                            }
                            ?>
                        </thead>
                        <tbody>
                            <?php
                            foreach($data['corpus'] as $word) {
                            ?>
                            <tr id="<?= $word['word']; ?>" data-word="<?= $word['word']; ?>" data-ipa="<?= $word['ipa']; ?>"
                                data-lang="<?= $word['lang']; ?>" data-lang-iso="<?= $word['lang-iso']; ?>">
                                <td class="text-start"><?= $word['word']; ?> (<code><?= $word['ipa']; ?></code>)</td>
                                <td class="text-start"><?= $word['lang']; ?> (<code><?= $word['lang-iso']; ?></code>)</td>
                                <?php
                                foreach($data['engines'] as $engine) {
                                    if($engine['status'] > 0) {
                                ?>
                                    <td class="listen" title="Click to listen">
                                        <img class="listen-icon" src="static/img/Audio_(CoreUI_Icons_v1.0.0).svg.png" alt="Audio icon"/>
                                    </td>
                                <?php
                                    }
                                }
                                ?>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
            <footer class="pt-5 my-5 text-muted border-top">
                <p>Made with 😈 by <a href="https://github.com/theresnotime/tool-tnt-dev/graphs/contributors"
                        target="_blank">these people</a></p>
                <p>
                    <strong>Attribution</strong><br>
                    <a href="https://commons.wikimedia.org/wiki/File:Audio_(CoreUI_Icons_v1.0.0).svg">CoreUI</a>, <a
                        href="https://creativecommons.org/licenses/by/4.0">CC BY 4.0</a>, via Wikimedia Commons
                </p>
            </footer>
        </div>
    </div>
    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"
        crossorigin="anonymous">
    </script>
</body>
</html>

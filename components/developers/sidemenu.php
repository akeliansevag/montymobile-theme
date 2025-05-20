<?php
global $post;
$post_slug = $post->post_name;
?>
<div class="dev-menu">
    <h5>External APIs Live</h5>
    <div class="dev-menu-content">
        <ul>
            <li>
                <div class="dev-page-nav <?= $post_slug == 'sms' ? 'current' : '' ?>">
                    <div>
                        <a href="<?= get_permalink(get_page_by_path('sms')) ?>">SMS</a>
                    </div>
                    <div data-bs-toggle="collapse" data-bs-target="#smsCollapse" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9">
                            <path id="dropdown-arrow" d="M7.977,6.545c.153-.165.242-.27.339-.366q2.911-2.9,5.823-5.8A1.064,1.064,0,0,1,15.218.04a1.03,1.03,0,0,1,.545,1.655,2.582,2.582,0,0,1-.194.2l-6.7,6.665a1.078,1.078,0,0,1-1.731,0Q3.756,5.2.375,1.841A1.041,1.041,0,1,1,1.792.321c.529.513,1.047,1.037,1.57,1.557Q5.591,4.095,7.818,6.312a1.72,1.72,0,0,1,.16.233Z" transform="translate(0.001 -0.001)" />
                        </svg>
                    </div>
                </div>
                <div class="collapse" id="smsCollapse">
                    <ul>
                        <li><a href="">asdsd</a></li>
                        <li><a href="">sdfsdf</a></li>
                        <li><a href="">dfgdfg</a></li>
                        <li><a href="">fghfgh</a></li>
                        <li><a href="">dfsfsdf</a></li>
                        <li><a href="">sdfsdfdsf</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
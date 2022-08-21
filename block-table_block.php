<div id="showcase" class="row-block bg-black phone-slider-block" data-theme="dark">

    <section class="w-max margin-auto" data-theme="dark">
        <header class="header section-header" data-theme="">
            <h2 class="headline prefade">Promotions Table</h2>
            <div class="lead w-safe margin-auto prefade">
                <p>Here’s a list of our current promotions and prices.</p>
            </div>
            <div class="buttons">
                <a href="#" class="button">Email us for special requests</a>
            </div>
        </header>

        <style>
table {
border: 1px solid var(--color-0c);
border-collapse: collapse;
margin: 0;
padding: 0;
width: 100%;
table-layout: fixed;
}

table caption {
font-size: 1.5em;
margin: .5em 0 .75em;
}

table tr {
background-color: inherit;
border: 1px solid var(--color-0b);
padding: var(--padding-small);
}

table th,
table td {
padding: var(--padding-small);
text-align: center;
}

table th {
font-size: var(--small);
text-transform: uppercase;
}

@media screen and (max-width: 600px) {
table {
border: 0;
}

table caption {
font-size: 1.3em;
}

table thead {
border: none;
clip: rect(0 0 0 0);
height: 1px;
margin: -1px;
overflow: hidden;
padding: 0;
position: absolute;
width: 1px;
}

table tr {
border-bottom: 3px solid var(--color-0c);
display: block;
margin-bottom: .625em;
}


table td {
border-bottom: 1px solid var(--color-0c);
display: block;
font-size: .8em;
text-align: right;
}



table td::before {
/*
* aria-label has no advantage, it won't be read inside a table
content: attr(aria-label);
*/
content: attr(data-label);
float: left;
font-weight: bold;
text-transform: uppercase;
}

table td:last-child {
border-bottom: 0;
}
}

table .buttons {
margin:0!important;
}

table .unavailable {
opacity:0.5;
pointer-events: none;
}

table td strong {
font-weight:var(--bold)!important;
font-size:var(--p);
}


        </style>

    <section class="w-max margin-auto">

        <table>
            <caption>Flames Shoutout Promotions</caption>
            <thead>
              <tr>
                <th scope="col">Promotion</th>
                <th scope="col">What you get</th>
                <th scope="col">Price</th>
                <th scope="col">Button</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Account"><strong>Quick Shoutout</strong></td>
                <td data-label="Due Date">Story post with link to profile.</td>
                <td data-label="Amount">฿200</td>
                <td data-label="Period"><div class="buttons"><a href="#" class="button">Button goe here</a></div></td>
              </tr>
              <tr>
                <td scope="row" data-label="Account"><strong>24 hour Grid Post</strong></td>
                <td data-label="Due Date">Appear on our main feed for an entire day.</td>
                <td data-label="Amount">฿300</td>
                <td data-label="Period"><div class="buttons"><a href="#" class="button">Button goe here</a></div></td>
              </tr>
              <tr>
                <td scope="row" data-label="Account"><strong>Reels</strong></td>
                <td data-label="Due Date">Upload your video to our Reels.</td>
                <td data-label="Amount">฿250</td>
                <td data-label="Period"><div class="buttons"><a href="#" class="button">Button goe here</a></div></td>
              </tr>
              <tr>
                <td scope="row" data-label="Acount"><strong>Swipe-Up</strong></td>
                <td data-label="Due Date">Promote your *website or online shop</td>
                <td data-label="Amount">฿250</td>
                <td data-label="Period"><div class="buttons"><a href="#" class="button">Button goe here</a></div></td>
              </tr>
              <tr class="unavailable">
                <td scope="row" data-label="Acount"><strong>Permanent Grid Post</strong></td>
                <td data-label="Due Date">Appear on our main feed forever!</td>
                <td data-label="Amount">฿1500</td>
                <td data-label="Period"><div class="buttons"><a href="#" class="button">SOLD OUT</a></div></td>
              </tr>

            </tbody>
          </table>
                        




    </section>

</div>


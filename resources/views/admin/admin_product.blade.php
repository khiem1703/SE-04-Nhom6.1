@extends('admin_layout')
@section('admincontent')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic table
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                        <thead>
                            <tr>
                                <th data-breakpoints="xs">ID</th>
                                <th> Name</th>
                                <th>Image</th>
                                <th data-breakpoints="xs">description</th>

                                <th data-breakpoints="xs sm md" data-title="DOB">new </th>
                                <th>created at </th>
                                <th>updated at </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-expanded="true">
                                <td>1</td>
                                <td>Dennise</td>
                                <td>Fuhrman</td>
                                <td>High School History Teacher</td>

                                <td>July 25th 1960</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Elodia</td>
                                <td>Weisz</td>
                                <td>Wallpaperer Helper</td>

                                <td>March 30th 1982</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raeann</td>
                                <td>Haner</td>
                                <td>Internal Medicine Nurse Practitioner</td>

                                <td>February 26th 1966</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Junie</td>
                                <td>Landa</td>
                                <td>Offbearer</td>

                                <td>March 29th 1966</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Solomon</td>
                                <td>Bittinger</td>
                                <td>Roller Skater</td>

                                <td>September 22nd 1964</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Bar</td>
                                <td>Lewis</td>
                                <td>Clown</td>

                                <td>August 4th 1991</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Usha</td>
                                <td>Leak</td>
                                <td>Ships Electronic Warfare Officer</td>

                                <td>November 20th 1979</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Lorriane</td>
                                <td>Cooke</td>
                                <td>Technical Services Librarian</td>

                                <td>April 7th 1969</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <div class="footer">
        <div class="wthree-copyright">
            <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
    <!-- / footer -->
</section>
@endsection
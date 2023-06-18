<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <table>
                    <tr>
                        <th> Product Title<th>
                        <th> Description</th>
                        <th>Quantity </th>
                        <th> Category</th>
                        <th>Price </th>
                        <th>Discount Price </th>
                        <th> Product Image</th>

                    </tr>
                    <tr>
                        <td>toy</td>
                        <td>good</td>
                        <td>10</td>
                        <td>toy</td>
                        <td>300</td>
                        <td>280</td>
                    </tr>
                </table>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

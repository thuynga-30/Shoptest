<!DOCTYPE html>
<html lang="en">

<head>
   @include('main.admin.head')
    <link rel="stylesheet" href="/assets/css/product-manager.css">
</head>

<body>
    <!-- Header -->
    <header class="headerprf">
        <div class="header__inner">
            <!-- Header top -->
            <div class="header__top">
                <div class="container">
                    <div class="header__top-inner">
                        <!-- Logo -->
                        <img src="/assets/img/logo4.png" alt="" class="logo">
                        <!-- Navbar -->
                        @include('main.admin.navbar')

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Main Content -->
    <main class="content-pm">
        <h2 class="section-title-pm">Product Management</h2>

        <!-- Form to Add New Product -->
        {{-- <section class="form-section"> --}}
            <h3 class="form-title">Add New Product</h3>
            <form  action="{{ route('admin.add_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="lb-pm" for="image">Product Image</label>
                    <input class="ip-pm" type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="name">Name</label>
                    <input  class="ip-pm" type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="name">Type</label>
                    <select name="category_id" id="">
                        @foreach($cats as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="origin">Origin</label>
                    <input class="ip-pm" type="text" id="origin" name="origin" required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="price">Price</label>
                    <input class="ip-pm" type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="weight">Weight</label>
                    <input class="ip-pm" type="number" id="weight" name="quantity" required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="descBasic">Basic Description</label>
                    <textarea class="ip-pm" id="descBasic" name="basic_des" required></textarea>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="descDetailed">Detailed Description</label>
                    <textarea class="ip-pm" id="descDetailed" name="description" required></textarea>
                </div>
                <button type="submit" class="btn-pm add-btnpm">Add Product</button>
            </form>
        {{-- </section> --}}

        <!-- Product Table -->
        <section class="table-section">
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Origin</th>
                        <th>Price</th>
                        <th>Weight</th>
                        <th>Basic Description</th>
                        <th>Detailed Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product) 
                    <tr>
                        <td> <img src="/assets/img/{{ $product->image }}" alt="" class="product-img"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->origin }}</td>
                        <td>${{ $product->price }}</td>
                        <td>1{{ $product->quatity }} g</td>
                        <td>{{ $product->basic_des }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            
                            <button class="btn-pm edit-btnpm" onclick="openEditPopup(this)" data-product="{{ json_encode($product) }}">Edit</button>
                            <form action="{{ route('admin.delete_product',$product->id) }}" method="POST" onclick="return confirm('Are you sure want to delete?')">
                                @csrf
                                <button type="submit" class="btn-pm delete-btnpm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </section>
    </main>
    </div>
    <div id="editModal" class="modal hidden">
        <div class="modal-content">
            <h3 class="modal-title">Edit Product</h3>
  
            <form method="POST" action="{{ route('admin.update_product',$product->id) }}" >
                @csrf
                <div class="form-group">
                    <label class="lb-pm" for="editImage">Product Image</label>
                    <input class="ip-pm" type="file" id="editImage" name="image">
                    {{-- <img src="/assets/img/{{ $product->image }}" width="100px"> --}}

                </div>
                <div class="form-group">
                    <label class="lb-pm" for="editName">Name</label>
                    <input class="ip-pm" type="text" id="editName" name="name" required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="editOrigin">Origin</label>
                    <input class="ip-pm" type="text" id="editOrigin" name="origin"  required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="editPrice">Price</label>
                    <input class="ip-pm" type="number" id="editPrice" name="price"  required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="editWeight">Weight</label>
                    <input class="ip-pm" type="number" id="editWeight" name="quantity"  required>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="editDescBasic">Basic Description</label>
                    <textarea class="ip-pm" id="editDescBasic" name="basic_des"  required></textarea>
                </div>
                <div class="form-group">
                    <label class="lb-pm" for="editDescDetailed">Detailed Description</label>
                    <textarea class="ip-pm" id="editDescDetailed" name="description"  required></textarea>
                </div>
                <button type="submit" class="btn-pm save-btnpm">Save Changes</button>
                <button type="button" class="btn-pm cancel-btnpm" onclick="closeModal()">Cancel</button>
            </form>
        </div>
    </div>
    <!-- Footer -->
    @include('main.admin.footer')

    <script src="/assets/js/product-manager.js"></script>
</body>

</html>
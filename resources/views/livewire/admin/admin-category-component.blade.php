<div class="container">
    <div class="pannel-default">
    <div class="pannel-heading">
        <h3>Admin categories</h3>
    </div>
    <div class="pannel-body">
            <table class="table bg-white">
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{$categories->link()}}
    </div>
    </div>
</div>

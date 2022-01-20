<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Variation;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Products";
        $products = Product::orderBy('id','DESC')->get();
        return view('admin.products.index', compact("products","title"));
    }

    public function add()
    {
        $title = "Product";
        return view('admin.products.form', compact("title"));
    }

    public function productvariations(Request $request)
    {
        $output="";
        if(isset($request->variations))
        {
            foreach($request->variations as $variation)
            {
                $variations = Variation::where('id',$variation)->first();
                $output.='
                <tr>
                    <td>
                        <input type="text" class="form-control shadow-none" name="" id="" readonly value="'.$variations->name.'">
                    </td>
                    <td>
                        <input type="text" class="form-control shadow-none" name="" id="" readonly value="SKU">
                    </td>
                    <td>
                        <input type="number" class="form-control shadow-none" name="" id="" value="Quantity" min="0">
                    </td>
                </tr>
                ';
            }
            echo $output;
        }
        else
        {
            $output ='<tr><td>No Variation Selected</td></tr>';
            echo $output;
        }
    }

    public function productcategories(Request $request)
    {
        $output="";
        if(isset($request->categories))
        {
            foreach($request->categories as $categories)
            {
                $parentcategory = Category::where('id',$categories)->first();
                $output.='
                <div class="col-md-4 m-auto">
                    <div class="form-group">
                        <label class="control-label" style="vertical-align: sub">'.$parentcategory->name.'</label>
                    </div>
                </div>
                <div class="col-md-8">
                <div>
                    <select class="select2 m-b-10 select2-multiple category-variations" style="width: 100%" multiple="multiple" data-placeholder="Select Child Category">
                        <optgroup>
                ';
                $childcategory = Category::where('parent_id',$parentcategory->id)->get();
                foreach($childcategory as $category)
                {
                    $output.='<option value="'.$category->id.'">'.$category->name.'</option>';
                }
                $output.='
                            </optgroup>
                        </select>
                    </div>
                </div>
                ';

            }
            echo $output;
        }
        else
        {
            $output =' <div class="col-md-12">No Category Selected</div>';
            echo $output;
        }
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->description = $request->description;

        if($request->hasFile('featured_image'))
        {
            $file = $request->file('featured_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $file->move(public_path("/admin/images/products"),$fileNameToStore);
            $product->featured_image = $fileNameToStore;
        }

        if($request->hasFile('hover_image'))
        {
            $file = $request->file('hover_image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $file->move(public_path("/admin/images/products"),$fileNameToStore);
            $product->hover_image = $fileNameToStore;
        }

        if($request->hasFile('size_chart'))
        {
            $file = $request->file('size_chart');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $file->move(public_path("/admin/images/products"),$fileNameToStore);
            $product->size_chart = $fileNameToStore;
        }

        $product->save();
        $product_id = $product->id;

        if($request->hasFile('galleryimages'))
        {
            foreach($request->file('galleryimages') as $galleryimages)
                {
                    $filenameWithExt = $galleryimages->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $galleryimages->getClientOriginalExtension();
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    $path = $galleryimages->move(public_path("/admin/images/products"),$fileNameToStore);
                    $gallery = new ProductGallery;
                    $gallery->image = $fileNameToStore;
                    $gallery->product_id =  $product_id;
                    $gallery->save();
                }
        }

        return redirect()->route('product.view')->with("success","Product Created Successfully");

    }

}

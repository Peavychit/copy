<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="{!! route('admin.auth.login)!!}" method="GET" >
            
            <div class="col-md-6">
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id" required>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Name Khmer</label>
                    
                </div>
                <div class="form-group">
                    <label>Code</label>
                    
                </div>
                <div class="form-group">
                    <label>Description Khmer</label>
                    
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                       
                    </select>
                </div>
                <div class="form-group">
                    <label>Qty</label>
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Discount</label>
                    <select class="form-control" name="discount_id">
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Name English</label>
                   
                </div>
                <div class="form-group">
                    <label>Price</label>
                    
                </div>
                <div class="form-group">
                    <label>Description English</label>
                    
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="image-preview">
                       
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm pull-right">Save</button>
            </div>
</form>

</body>
</html>
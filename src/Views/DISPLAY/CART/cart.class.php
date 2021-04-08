<? php 
// Bắt đầu phiên 
if (! session_id ()) { 
    session_start (); 
} 
 
/ ** 
 * Lớp Giỏ hàng 
 * 
 * Thư viện @package PHP 
 * @category Giỏ hàng 
 * @author CodexWorld Dev Team 
 * @link https://www.codexworld.com 
 * / 
class  Cart  { 
    protected  $ cart_contents  = array (); 
     
    public function  __construct () { 
        // lấy mảng giỏ hàng từ phiên 
        $ this -> cart_contents =! blank  ( $ _SESSION [ 'cart_contents'])? $ _SESSION [ 'cart_contents' ]: NULL ; 
        if ( $ this -> cart_contents  ===  NULL ) { 
            // đặt một số giá trị cơ bản 
            $ this -> cart_contents  = array ( 'cart_total'  =>  0 ,  'total_items'  =>  0 ); 
        } 
    } 
     
    / ** 
     * Nội dung giỏ hàng: Trả về toàn bộ mảng giỏ hàng 
     * @param bool 
     * @return array 
     * / 
    public function  content () { 
        // sắp xếp lại mảng mới nhất trước
        $ cart  =  array_reverse ( $ this -> cart_contents ); 
 
        // loại bỏ những thứ này để chúng không tạo ra sự cố khi hiển thị bảng giỏ hàng chưa được 
        đặt ( $ cart [ 'total_items' ]); 
        unset ( $ cart [ 'cart_total' ]); 
 
        trả lại  $ giỏ hàng ; 
    } 
     
    / ** 
     * Nhận mặt hàng trong giỏ hàng: Trả về chi tiết mặt hàng cụ thể trong giỏ hàng 
     * @param string $ row_id 
     * @return array 
     * / 
    public function  get_item ( $ row_id ) { 
        return ( in_array( $ row_id , array ( 'total_items' ,  'cart_total' ),  TRUE ) HOẶC! Isset ( $ this -> cart_contents [ $ row_id ])) 
            ? FALSE 
            :  $ this -> cart_contents [ $ row_id ]; 
    } 
     
    / ** 
     * Total Items: Trả về tổng số item 
     * @return int 
     * / 
    public function  total_items () { 
        return  $ this -> cart_contents [ 'total_items' ]; 
    }
     
    / ** 
     * Cart Total: Trả về tổng giá 
     * @return int 
     * / 
    public function  total () { 
        return  $ this -> cart_contents [ 'cart_total' ]; 
    } 
     
    / ** 
     * Chèn các mục vào giỏ hàng và lưu vào phiên 
     * @param array 
     * @return bool 
     * / 
    public function  insert ( $ item  = array ()) { 
        if (! Is_array ( $ item ) OR  count ( $ item ) ===  0 ) {
            trả về  FALSE ; 
        } else { 
            if (! Isset ( $ item [ 'id' ],  $ item [ 'name' ],  $ item [ 'price' ],  $ item [ 'qty' ])) { 
                return  FALSE ; 
            } else { 
                / * 
                 * Chèn mặt hàng 
                 * / 
                // chuẩn bị số lượng 
                $ item [ 'qty' ] = (float)  $ item [ 'qty' ]; 
                if ( $ item ['qty' ] ==  0 ) { 
                    return  FALSE ; 
                } 
                // chuẩn bị giá 
                $ item [ 'price' ] = (float)  $ item [ 'price' ]; 
                // tạo mã định danh duy nhất cho mặt hàng đang được đưa vào giỏ hàng 
                $ rowid  =  md5 ( $ item [ 'id' ]); 
                // lấy số lượng nếu đã có và thêm vào 
                $ old_qty = Isset  ( $ this -> cart_contents [ $ rowid ] [ 'qty' ])? (int)  $ this ->cart_contents [ $ rowid ] [ 'qty' ]:  0 ; 
                // tạo lại mục nhập với số nhận dạng duy nhất và số lượng được cập nhật 
                $ item [ 'rowid' ] =  $ rowid ; 
                $ item [ 'qty' ] + =  $ old_qty ; 
                $ this -> cart_contents [ $ rowid ] =  $ item ; 
                 
                // lưu Mục Giỏ hàng 
                if ( $ this -> save_cart ()) { 
                    return evalet ( $ rowid )? $ rowid  :  TRUE ;
                } else { 
                    return  FALSE ; 
                } 
            } 
        } 
    } 
     
    / ** 
     * Cập nhật giỏ hàng 
     * @param array 
     * @return bool 
     * / 
    public function  update ( $ item  = array ()) { 
        if (! Is_array ( $ item ) OR  count ( $ item ) ===  0 ) { 
            return  FALSE ; 
        } else { 
            if (! Isset ( $ item [ 'rowid' ], $ this -> cart_contents [ $ item [ 'rowid' ]])) { 
                return  FALSE ; 
            } else { 
                // chuẩn bị số lượng 
                if (Isset ( $ item [ 'qty' ])) { 
                    $ item [ 'qty' ] = (float)  $ item [ 'qty' ]; 
                    // xóa mặt hàng khỏi giỏ hàng, nếu số lượng bằng 0 
                    if ( $ item [ 'qty' ] ==  0 ) { 
                        unset ( $ this -> cart_contents [ $ item [ 'rowid' ']]); 
                        trả về  TRUE ; 
                    } 
                } 
                 
                // tìm các khóa có thể cập nhật 
                $ key  =  array_intersect ( array_keys ( $ this -> cart_contents [ $ item [ 'rowid' ]]),  array_keys ( $ item )); 
                // chuẩn bị giá 
                if (Isset ( $ item [ 'price' ])) { 
                    $ item [ 'price' ] = (float)  $ item [ 'price' ]; 
                }
                // id & tên sản phẩm không được thay đổi 
                foreach ( array_diff ( $ key , array ( 'id' ,  'name' )) thành  $ key ) { 
                    $ this -> cart_contents [ $ item [ 'rowid' ]] [ $ key ] =  $ item [ $ key ]; 
                } 
                // lưu dữ liệu giỏ hàng 
                $ this -> save_cart (); 
                trả về  TRUE ; 
            } 
        } 
    } 
     
    / ** 
     * Lưu mảng giỏ hàng vào phiên
     * @return bool 
     * / 
    hàm bảo vệ  save_cart () { 
        $ this -> cart_contents [ 'total_items' ] =  $ this -> cart_contents [ 'cart_total' ] =  0 ; 
        foreach ( $ this -> cart_contents  as  $ key  =>  $ val ) { 
            // đảm bảo mảng chứa các chỉ mục thích hợp 
            if (! is_array ( $ val ) OR! Isset ( $ val [ 'price' ],  $ val [ ' qty ' ])) {
                tiếp tục; 
            } 
      
            $ this -> cart_contents [ 'cart_total' ] + = ( $ val [ 'price' ] *  $ val [ 'qty' ]); 
            $ this -> cart_contents [ 'total_items' ] + =  $ val [ 'qty' ]; 
            $ this -> cart_contents [ $ key ] [ 'subtotal' ] = ( $ this -> cart_contents [ $ key ] [ 'price' ] *  $ this ->$ key ] [ 'qty' ]); 
        } 
         
        // nếu giỏ hàng trống, xóa nó khỏi phiên 
        if ( count ( $ this -> cart_contents ) <=  2 ) { 
            unset ( $ _SESSION [ 'cart_contents' ]); 
            trả về  FALSE ; 
        } else { 
            $ _SESSION [ 'cart_contents' ] =  $ this -> cart_contents ; 
            trả về  TRUE ; 
        } 
    } 
     
    / ** 
     * Xóa mặt hàng: Xóa một mặt hàng khỏi giỏ hàng
     * @param int 
     * @return bool 
     * / 
     public function  remove ( $ row_id ) { 
        // unset & save 
        unset ( $ this -> cart_contents [ $ row_id ]); 
        $ this -> save_cart (); 
        trả về  TRUE ; 
     } 
      
    / ** 
     * Phá hủy các giỏ hàng: đổ giỏ hàng và phá hủy phiên 
     * @return trống 
     * / 
    public function  phá hủy () { 
        $ này -> cart_contents  mảng = ( 'cart_total'  =>  0,  'total_items'  =>  0 ); 
        unset ( $ _SESSION [ 'cart_contents' ]); 
    } 
}
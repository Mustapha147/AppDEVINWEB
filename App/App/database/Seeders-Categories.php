Category.delete_all
category_one = Category.create(:name => "Category 1",
          :slug => 1,
          :parent_id => nil )

category_two = Category.create(:name => "Category 2",
          :slug => 2,
          :parent_id => category_one.id )

category_tree = Category.create(:name => "Category 3",
          :slug => 3,
          :parent_id => category_two.id )          

category_foor = Category.create(:name => "Category 4",
          :slug => 4,
          :parent_id => category_tree.id )          

category_five = Category.create(:name => "Category 5",
          :slug => 5,
          :parent_id => category_foor.id )          

category_six = Category.create(:name => "Category 6",
          :slug => 6,
          :parent_id => category_five.id )

category_seven = Category.create(:name => "Category 7",
          :slug => 7,
          :parent_id => category_six.id )

category_eight = Category.create(:name => "Category 8",
          :slug => 8,
          :parent_id => category_seven.id )


category_nine = Category.create(:name => "Category 9",
          :slug => 9,
          :parent_id => category_eight.id )


category_ten = Category.create(:name => "Category 10",
          :slug => 10,
          :parent_id => category_nine.id )


category_eleven = Category.create(:name => "Category 11",
          :slug => 11,
          :parent_id => category_ten.id )


category_twelve = Category.create(:name => "Category 12",
          :slug => 12,
          :parent_id => category_eleven.id )


category_thirteen = Category.create(:name => "Category 13",
          :slug => 13,
          :parent_id => category_twelve.id )


category_foorteen = Category.create(:name => "Category 14",
          :slug => 14,
          :parent_id => category_thirteen.id )


category_fiftheen = Category.create(:name => "Category 15",
          :slug => 15,
          :parent_id => category_foorteen.id )



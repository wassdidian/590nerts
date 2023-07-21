int main(){
    std::ifstream fin("input.txt");
    std::ofstream fout("output.txt");

    std::vector<Man> v;
    std::vector<Man>::iterator i;

    std::copy(std::istream_iterator<Man>(fin), 
        std::istream_iterator<Man>(),
        std::inserter(v, v.end()));
    std::sort(v.begin(), v.end(), comparator());

    i = std::find_if(v.begin(), v.end(), Predicat(20, 25));
    std::cout << (*i) << std::endl;

    std::copy(v.begin(), 
        v.end(), 
        std::ostream_iterator<Man>(fout, "\n"));
    return 0;
}

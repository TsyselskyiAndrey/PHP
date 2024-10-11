class ApiController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments')->get();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        return response()->json($post);
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return response()->json($post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        return response()->json($post);
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return response()->json(['message' => 'Пост удален']);
    }
}

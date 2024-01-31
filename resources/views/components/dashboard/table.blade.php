
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200  text-sm">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full"
                                src="{{ asset('images').'/'.$data->image }}" alt="{{$data->title}}" />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 dark:text-white whitespace-no-wrap">
                                    {{$data->title}}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200  text-sm">
                        <p class="text-gray-900 dark:text-white whitespace-no-wrap">{{$data->category['name']}}</p>
                    </td>

                    <td class="px-5 py-5 border-b border-gray-200  text-sm">
                        <a  href="/admin/edit/{{$data->id}}" class="text-white bg-green-700 hover:bg-green-800   font-medium rounded-full text-sm px-5 py-1 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Edit</a>


                            <form method="POST" action="{{ route('admin.destroy', ['id' => $data->id]) }}" class="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-full text-sm px-5 py-1 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Delete</button>
                            </form>

                    </td>
                </tr>


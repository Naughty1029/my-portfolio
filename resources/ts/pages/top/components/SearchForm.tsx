import { useEffect, useState } from 'react'
import axios from 'axios'

type Works = {
    id: number
    title: string
    comment: string
    url: string
    github: string | null
}

type Props = {
    updateWorks: (data: Works[]) => void
}

type Categories = {
    id: number
    category: string
}

export const SearchForm: React.VFC<Props> = ({ updateWorks }) => {
    const [categories, setCategories] = useState<Categories[]>([])
    const [searchText, setSearchText] = useState<string>('')
    const [searchOptions, setSearchOptions] = useState<number[]>([])

    const getCategories = () => {
        axios.get('api/categories').then((res) => {
            setCategories(res.data)
        })
    }

    const handleInputChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        setSearchText(e.target.value)
    }

    let copyArray: number[] = [...searchOptions]
    const handleCheckboxChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        const option = parseInt(e.target.value)
        if (e.target.checked) {
            copyArray.push(option)
        } else {
            copyArray = copyArray.filter((item) => {
                return item !== option
            })
        }
        setSearchOptions(copyArray)
    }

    const searchFormOnClick = (event: React.MouseEvent<HTMLElement>) => {
        event.preventDefault()
        if (!searchText.match(/\S/g) && searchOptions.length === 0) {
            alert('検索ワードを指定してください')
            return
        }
        axios
            .get('/api/works/', {
                params: {
                    searchText: searchText,
                    searchOptions: searchOptions,
                },
            })
            .then((res) => {
                updateWorks(res.data)
            })
    }

    useEffect(() => {
        getCategories()
    }, [])

    const searchAllData = (event: React.MouseEvent<HTMLElement>) => {
        event.preventDefault()
        axios.get('api/works').then((res) => {
            updateWorks(res.data)
        })
    }

    const toggleSearchOptions = (event: React.MouseEvent<HTMLElement>) => {
        event.preventDefault()
        const el = event.target as HTMLElement
        const target = el.getAttribute('href')
        if (target) {
            const id = document.getElementById(target)
            id ? id.classList.toggle('active') : ''
        }
    }
    return (
        <form>
            <div className="searchBox">
                <input type="text" className="input" defaultValue={searchText} onChange={handleInputChange} />
                <button type="submit" onClick={searchFormOnClick}>
                    Search
                </button>
                <p className="searchOption">
                    <a onClick={searchAllData} href="/">
                        すべて表示
                    </a>
                </p>
                <p className="searchOption">
                    <a onClick={toggleSearchOptions} href="searchOptions">
                        options
                    </a>
                </p>
            </div>
            <div id="searchOptions" className="searchOptions">
                <p>チェックをつけて、Searchボタンを押してください</p>
                <ul>
                    {categories.map((category) => (
                        <li key={category.id}>
                            <label>
                                <input
                                    type="checkbox"
                                    name="searchOptions"
                                    value={category.id}
                                    onChange={handleCheckboxChange}
                                />
                                {category.category}
                            </label>
                        </li>
                    ))}
                </ul>
            </div>
        </form>
    )
}

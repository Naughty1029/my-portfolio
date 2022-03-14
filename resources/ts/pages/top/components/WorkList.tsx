import { useEffect, useState } from 'react'
import axios from 'axios'
import { WorkItem } from './WorkItem'

type Works = {
    id: number
    title: string
    comment: string
    url: string
    github: string | null
}

export const WorkList: React.VFC = () => {
    const [works, setWorks] = useState<Works[]>([])

    const getWorks = () => {
        axios.get('api/works').then((res) => {
            setWorks(res.data)
        })
    }

    useEffect(() => {
        getWorks()
    }, [])

    return (
        <ul className="workLists">
            {works.map((work) => (
                <WorkItem key={work.id} work={work} />
            ))}
        </ul>
    )
}

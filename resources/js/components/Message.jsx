import React, { useState, useEffect } from 'react';

const MessagesComponent = () => {
    const [messages, setMessages] = useState([]);
    const [offset, setOffset] = useState(0);
    const [status, setStatus] = useState('kritik');

    useEffect(() => {
        fetchMessages();
    }, [status]);


    const fetchMessages = async() => {
        await fetch(`/messages/fetch/${offset}/${status}`)
            .then(response => response.json()).then(data => {
                if (!data.messages.length == 0) { 
                    setMessages([...data.messages]);
                    setOffset(prevOffset => prevOffset + data.messages.length);
                }
            })
            .catch(error => {
                console.error('Error fetching messages', error);
            });
    };

    const decreseMessages = async(offsets) => {
        await fetch(`/messages/fetch/${offsets}/${status}`)
            .then(response => response.json()).then(data => {
                if (!data.messages.length == 0) { 
                    setMessages([...data.messages]);
                    setOffset(offset - data.messages.length);
                }
            })
            .catch(error => {
                console.error('Error fetching messages', error);
            });
    }

    const loadMore = () => {
        if (messages && messages.length > 0) {
            fetchMessages();
        }
    };

    const handleScroll = () => {
        const windowHeight = "innerHeight" in window ? window.innerHeight : document.documentElement.offsetHeight;
        const body = document.body;
        const html = document.documentElement;
        const docHeight = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
        const windowBottom = windowHeight + window.scrollY;
        if (windowBottom >= docHeight) {
            loadMore();
        }
    }

    const back = () => {
        decreseMessages(offset-14);
    }

    const kritik = () => {
        setStatus('kritik');
    }
    const menfess = () => {
        setStatus('menfess');
    }

    return (
        <>
        <div className="container"></div>
        <div className="box">
            <div className="option_box">
                <button onClick={kritik} className="comic-button">
                    kritik siswa
                </button>
                <button onClick={menfess} className="comic-button">
                    menfess
                </button>
            </div>
            <div className="letter_box" id="letterBox">
            {messages.map(message => (
                <div className="card" key={message.id}>
                    <div className="text">
                        <p className="subtitle">{message.pesan}</p>
                    </div>
                    <div className="btn_view">
                        <button><ion-icon name="mail-unread-outline"></ion-icon></button>
                    </div>
                </div>
             ))}
        
            </div>
        </div>
            <div className="pagechose">
                <div className="btn_chose">
                    <button onClick={back}><ion-icon name="arrow-back-outline"></ion-icon></button>
                </div>
                <div className="btn_chose">
                    <button onClick={loadMore}><ion-icon name="arrow-forward-outline"></ion-icon></button>
                </div>
            </div>
        </>
    );
};


export default MessagesComponent;

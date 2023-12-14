import { AiOutlineSend, AiOutlineInstagram } from "react-icons/ai";
import { BiLogoFacebook } from "react-icons/bi";
import { LuTwitter } from "react-icons/lu";
import { LiaLinkedinIn } from "react-icons/lia";
import Link from "next/link";
import styles from "@css/myfooter.module.css";
import React from "react";
import ReactDOM from "react-dom/client";

const FooterSect = () => {
    return (
        <div className="w-full flex justify-center items-center bg-[#2c2c2c]">
            <div className="w-[90%] flex justify-center items-center mx-auto p-4 py-20">
                <div className="w-full flex flex-col md:flex-row md:grid-rows-2 lg:grid-rows-3 justisfy-center items-start gap-8 lg:gap-[80px]">
                    <div className="md:w-full grid gap-2 items-center justify-center">
                        <h1 className={styles.FooterSectTitle}>Exclusive</h1>

                        <ul className={styles.FooterSectUl}>
                            <li className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    Subscribe
                                </Link>
                            </li>
                            <li className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    Get 10% off your first order
                                </Link>
                            </li>
                        </ul>
                        <div className={styles.bind}>
                            <input
                                type="email"
                                placeholder="Enter your email"
                                className={styles.FooterSectInput}
                            />
                            <div className={styles.FooterSectInputIcon}>
                                <AiOutlineSend />
                            </div>
                        </div>
                    </div>
                    <div className="grid gap-3 items-center justify-center">
                        <h1 className={styles.FooterSectTitle}>Support</h1>
                        <ul className={styles.FooterSectUl}>
                            <li className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    111 Bijoy sarani, Dhaka, DH 1515,
                                    Bangladesh.
                                </Link>
                            </li>
                            <li className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    exclusive@gmail.com
                                </Link>
                            </li>
                            <li className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    +88015-88888-9999
                                </Link>
                            </li>
                        </ul>
                    </div>
                    <div className="grid gap-3 items-center justify-center">
                        <h1 className={styles.FooterSectTitle}>Account</h1>
                        <ul className={styles.FooterSectUl}>
                            <li className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    My Account
                                </Link>
                            </li>
                            <li className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    Login/Register
                                </Link>
                            </li>
                            <li className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    Cart
                                </Link>
                            </li>
                        </ul>
                    </div>
                    <div className="md:w-full grid gap-3 items-center justify-center">
                        <h1 className={styles.FooterSectTitle}>Quick Links</h1>

                        <div className={styles.FooterSectLi}>
                            <Link href="" className={styles.links}>
                                Privacy Policy
                            </Link>
                        </div>
                        <div className={styles.FooterSectLi}>
                            <Link href="" className={styles.links}>
                                Terms of Use
                            </Link>
                        </div>
                        <div className={styles.FooterSectLi}>
                            <Link href="" className={styles.links}>
                                FAQ
                            </Link>
                        </div>
                        <div className={styles.FooterSectLi}>
                            <Link href="" className={styles.links}>
                                Contact
                            </Link>
                        </div>
                    </div>
                    <div className="grid gap-3 items-center justify-center">
                        <h1 className={styles.FooterSectTitle}>Follow</h1>
                        <div className={styles.iconBind}>
                            <div className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    <BiLogoFacebook />
                                </Link>
                            </div>
                            <div className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    <LuTwitter />
                                </Link>
                            </div>
                            <div className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    <AiOutlineInstagram />
                                </Link>
                            </div>
                            <div className={styles.FooterSectLi}>
                                <Link href="" className={styles.links}>
                                    <LiaLinkedinIn />
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default FooterSect;


if(document.getElementById('footer')){
    const Index = ReactDOM.createRoot(document.getElementById('footer'));

Index.render(<React.StrictMode><FooterSect /></React.StrictMode>)
}
